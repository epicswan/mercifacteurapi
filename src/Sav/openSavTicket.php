<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\SavApi;

$savApi = new SavApi();

$ww_service_id = '';
$ww_access_token = '';

$your_service_name = '';


$email = '';
$reference_courrier = '';
$sujet = '';
$message_texte = '';


try {
  $response = $savApi->openSavTicket(
    $ww_service_id,
    $ww_access_token,
    $your_service_name,
    $email,
    $reference_courrier,
    $sujet,
    $message_texte
  );

  echo "Ticket ouvert avec succès. Numéro du ticket : " . $response->getSavId() . "\n";
} catch (MerciFacteurApi\Client\ApiException $e) {
  echo "Erreur lors de l'ouverture de ticket \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
