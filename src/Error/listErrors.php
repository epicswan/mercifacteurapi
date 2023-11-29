<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\ErrorsApi;

$errorApi = new ErrorsApi();

$ww_service_id = '';
$ww_access_token = '';

try {
  $response = $errorApi->listErrors($ww_service_id, $ww_access_token);

  echo $response->getSuccess() . "La liste des erreurs : \n";
  print_r($response->getListErrors());
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération de la liste \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
