<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CourrierApi;

$courrierApi = new CourrierApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = 0;
$token = "";
$product = "";
$type = "";
$file = "";

try {
  $response = $courrierApi->uploadFile($id_user, $token, $product, $type, $file, $ww_service_id, $ww_access_token);

  echo 'Le fichier a bien été chargé dans le token numéro : ' . $response->getToken();
  echo $response;
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération de l'envoi \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
