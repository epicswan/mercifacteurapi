<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\UserApi;

$userApi = new UserApi();

$ww_service_id = '';
$ww_access_token = '';

$email_user = "";
$first_name = "";
$last_name = "";

$id_user = 0;

try {
  $response = $userApi->updateUser($email_user, $first_name, $last_name, $ww_service_id, $ww_access_token, $id_user);

  echo $response . "\n \n";
  echo "les modifications pour l'ID {$id_user} sont bien prises en compte : \n";
  echo "email : {$email_user} \nfirstName: {$first_name} \nlastName: {$last_name} \n";
} catch (MerciFacteurApi\Client\ApiException $e) {
  echo "Erreur lors de la modification du user ID \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
