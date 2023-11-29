<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CourrierApi;

$courrierApi = new CourrierApi();

$ww_service_id = '';
$ww_access_token = '';

$id_envoi = 0;

try {
  $response = $courrierApi->getSuiviEnvoi($ww_service_id, $ww_access_token, $id_envoi);

  echo "L'état de l'envoi : \n";
  echo $response->getStatutPrintEnvoi();
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération de l'envoi \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
