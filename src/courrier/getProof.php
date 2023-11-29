<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CourrierApi;

$courrierApi = new CourrierApi();

$ww_service_id = '';
$ww_access_token = '';

$tracking_number = "";
$document = "";

try {
  $response = $courrierApi->getProof($ww_service_id, $ww_access_token, $tracking_number, $document);

  echo "La preuve de" . $document . ": \n";
  echo $response;
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors du chargement de la preuve \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
