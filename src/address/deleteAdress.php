<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\AdressApi;

$addressApi = new AdressApi();

$ww_service_id = '';
$ww_access_token = '';

$id_address = 0;

try {
  $response = $addressApi->deleteAdress($ww_service_id, $ww_access_token, $id_address);

  echo $response->getSuccess() . " Adresse supprimée avec succès. : " . $id_address . "\n";
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la suppression de l'adresse \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
