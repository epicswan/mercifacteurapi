<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\AdressApi;

$addressApi = new AdressApi();

$ww_service_id = '';
$ww_access_token = '';

$zone = '';

try {
  $response = $addressApi->getCountry($ww_service_id, $ww_access_token, $zone);

  echo "La liste des pays demandés : \n";
  print_r($response->getCountry());
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération des pays \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
