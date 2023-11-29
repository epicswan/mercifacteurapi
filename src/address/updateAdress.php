<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\AdressApi;

$addressApi = new AdressApi();

$ww_service_id = '';
$ww_access_token = '';

$id_address = 0;
$addressArray = [
  "logo" => "",
  "civilite" => "",
  "nom" => "",
  "prenom" => "",
  "societe" => "",
  "adresse1" => "",
  "adresse2" => "",
  "adresse3" => "",
  "cp" => "",
  "ville" => "",
  "pays" => "",
  "phone" => "",
  "email" => "",
  "consent" => 0
];
$address = json_encode($addressArray);


try {
  $response = $addressApi->updateAdress($ww_service_id, $ww_access_token, $id_address, $address);

  echo "Adresse modifiée avec succès \n";
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la modification de l'adresse \n";
  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
