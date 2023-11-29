<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CompteApi;

$compteApi = new CompteApi();

$ww_service_id = '';
$ww_access_token = '';

$url = '';

try {
  $response = $compteApi->setWebhookEndpoint($url, $ww_service_id, $ww_access_token);

  if ($url === '') {
    echo "Plus aucune url configurée";
  } else {
    echo "Url {$url} définit comme endpoint \n";
  }
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la définition du endpoint \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
