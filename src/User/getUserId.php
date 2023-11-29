<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\UserApi;

$userApi = new UserApi();

$ww_service_id = '';
$ww_access_token = '';

$email_user = '';

try {
  $response = $userApi->getUserId($ww_service_id, $ww_access_token, $email_user);

  $userId = $response->getUserId();
  echo "User ID pour l'email {$email_user} : {$userId}\n";
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la récupération du user ID \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
