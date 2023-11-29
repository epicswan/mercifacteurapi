<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\AdressApi;

$addressApi = new AdressApi();

$ww_service_id = '';
$ww_access_token = '';

$id_address = 0;

try {
  $response = $addressApi->getAdressInfos($ww_service_id, $ww_access_token, $id_address);

  echo "Voici le détail de l'adresse {$id_address} \n";

  echo ($response);
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération des infos \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
