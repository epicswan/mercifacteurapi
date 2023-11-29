<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\UserApi;

$userApi = new UserApi();

$ww_service_id = '';
$ww_access_token = '';

$email_user = '';
$first_name = '';
$last_name = '';

try {
  $response = $userApi->setUser($email_user, $first_name, $last_name, $ww_service_id, $ww_access_token);

  $userId = $response->getUserId();

  echo "Utilisateur créé avec succès. ID : " . $userId . "\n";
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la création de l'utilisateur \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
