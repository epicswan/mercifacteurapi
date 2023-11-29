<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\UserApi;

$userApi = new UserApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = 0;

try {
  $response = $userApi->deleteUser($ww_service_id, $ww_access_token, $id_user);

  echo $response->getSuccess() . " Utilisateur supprimé avec succès. : " . $id_user . "\n";
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de la suppression de l'utilisateur \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
