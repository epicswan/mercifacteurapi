<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\CourrierApi;

$courrierApi = new CourrierApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = "";
$mode_envoi = "";
$address = '{
  "exp": "",
  "dest": [""]
}';;
$date_envoi = "";
$designation = "";
$anonymise = '{
  "delay": 0,
  "target": [""]
}';
$content = '{
  "letter": {
    "files": [
      ""
    ],
    "base64files": [
      ""
    ],
    "final_filename": "",
    "print_sides": ""
  },
  "photo": {
    "files": [
      ""
    ],
    "base64files": [
      ""
    ],
    "tokenLibrary": ""
  },
  "card": {
    "format": "",
    "visuel": {
      "type": "",
      "value": ""
    },
    "text": {
      "type": "",
      "value": ""
    },
    "coin": "",
    "papier": ""
  }
}';

try {
  $response = $courrierApi->sendCourrier($id_user, $mode_envoi, $address, $date_envoi, $designation, $anonymise, $content, $ww_service_id, $ww_access_token);

  echo "envoi réussi : \n";
  echo $response;
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "Erreur lors de cet envoi \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
