<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CompteApi;

$compteApi = new CompteApi();

$ww_service_id = '';
$ww_access_token = '';

try {
  $response = $compteApi->getWebhookEndpoint($ww_service_id, $ww_access_token);

  if ($response->getUrl() === '') {
    echo "Aucune url définit pour le moment";
  } else {
    echo "Url définit comme endpoint :  \n" . $response->getUrl();
  }
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération du endpoint \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
