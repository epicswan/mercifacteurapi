<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\PublipostageApi;

$publiPostageApi = new PublipostageApi();

$ww_service_id = '';
$ww_access_token = '';

$id_envoi = 0;
$id_exp = 0;
$json_exp = "";
$mode_envoi = "";
$anonymise = '{
  "delay": 0,
  "target": [""]
}';

try {
  $response = $publiPostageApi->sendPublipostage($id_envoi, $id_exp, $json_exp, $mode_envoi, $anonymise, $ww_service_id, $ww_access_token);

  echo "votre publipostage est bien envoyé. \n";
  echo $response;
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de l'envoi du publipostage \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
