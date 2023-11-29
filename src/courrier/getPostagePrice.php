<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CourrierApi;

$courrierApi = new CourrierApi();

$ww_service_id = '';
$ww_access_token = '';

$mode_envoi = "";
$card_format = "";
$card_papier = "";
$card_coin = "";
$letter_page_number = 0;
$photo_number = 0;
$pays_destinataire = "";
$id_destinataire = [];
$letter_print_sides = "";

try {
  $response = $courrierApi->getPostagePrice($ww_service_id, $ww_access_token, $mode_envoi, $card_format, $card_papier, $card_coin, $letter_page_number, $photo_number, $pays_destinataire, $id_destinataire, $letter_print_sides);

  echo "Le montant de cet envoi sera : \n";
  echo $response;
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération du montant de l'envoi \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
