<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CourrierApi;

$courrierApi = new CourrierApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = 0;

try {
  $response = $courrierApi->listEnvois($ww_service_id, $ww_access_token, $id_user);

  echo "Les 50 derniers envois de l'id " . $id_user . " : \n";
  echo $response;
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération de la liste \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
