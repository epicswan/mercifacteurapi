<?php

require_once '../../../../librairie/php/SwaggerClient/vendor/autoload.php';

use MerciFacteurApi\Client\Api\AdressApi;

$addressApi = new AdressApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = 0;
$type = "";
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
  "consent" => 0,
];

$address = json_encode($addressArray);


try {
  $response = $addressApi->setNewAdress($ww_service_id, $ww_access_token, $id_user, $type, $address);

  echo "Adresse crée \n id : \n" . $response->getAdressId();
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la création de l'adresse \n";
  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
