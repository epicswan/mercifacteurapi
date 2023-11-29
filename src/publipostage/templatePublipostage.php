<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\PublipostageApi;

$publiPostageApi = new PublipostageApi();

$ww_service_id = '';
$ww_access_token = '';

$typeTemplate = '';
$template = '';

try {
  $response = $publiPostageApi->templatePublipostage($typeTemplate, $template, $ww_service_id, $ww_access_token);

  echo "votre template est bien envoyé. \n";
  echo "Le templateValidation à utiliser pour /sourcePublipostage : \n";
  echo ($response->getTemplateValidation());
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de l'envoi du template \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
