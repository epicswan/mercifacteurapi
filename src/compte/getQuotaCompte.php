<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CompteApi;

$compteApi = new CompteApi();

$ww_service_id = '';
$ww_access_token = '';

try {
  $response = $compteApi->getQuotaCompte($ww_service_id, $ww_access_token);

  echo "Quotas restant : \n";
  echo ($response->getQuotas());
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération des quotas \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
