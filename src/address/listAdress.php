<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\AdressApi;

$addressApi = new AdressApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = 0;
$type = "";
$search = '{"logo":"","civilite":"","nom":"","prenom":"","societe":"","adresse1":"","adresse2":"","":"","cp":"","ville":"","pays":"","phone":"","email":"","consent":""}';

try {
  $response = $addressApi->listAdress($ww_service_id, $ww_access_token, $id_user, $type, $search);

  echo "La liste des adresses demandées : \n";
  print_r($response->getAdress());
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la modification de l'adresse \n";
  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
