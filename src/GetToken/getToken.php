<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\GetTokenApi;

$getTokenApi = new GetTokenApi();

$ww_service_signature = '';
$ww_timestamp = '';
$ww_service_id = '';
$ww_authorized_ip = '';

try {
  $response = $getTokenApi->getToken($ww_service_signature, $ww_timestamp, $ww_service_id, $ww_authorized_ip);

  $token = $response->getToken();

  echo "Token récupéré : {$token}\n";
} catch (MerciFacteurApi\Client\ApiException $e) {
  echo "Erreur lors de la récupération du token \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
