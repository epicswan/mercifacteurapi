<?php

require_once '../../vendor/autoload.php';

use MerciFacteurApi\Client\Api\PublipostageApi;

$publiPostageApi = new PublipostageApi();

$ww_service_id = '';
$ww_access_token = '';

$id_user = 0;

$source = '{
  "type": "json",
  "value": [{"date_courrier":"","civilite":"","societe":"","nom":"","prenom":"","adresse1":"","adresse2":"","adresse3":"","cp":"","ville":"","pays":"","delai_relance":0,"Total_impaye":0,"ref_client":123}]
}';

$template_validation = '{
  "timeTemplate": 0,
  "template": "",
  "inputs": [
      "Total_impaye",
      "adresse1",
      "adresse2",
      "adresse3",
      "civilite",
      "cp",
      "date_courrier",
      "delai_relance",
      "nom",
      "prenom",
      "ref_client",
      "ville"
  ],
  "key": "",
  "nbPage": 0
}';

try {
  $response = $publiPostageApi->sourcePublipostage($id_user, $template_validation, $source, $ww_service_id, $ww_access_token);

  echo "votre source est bien envoyé, idEnvoi :\n";
  echo ($response->getIdEnvoi());
} catch (MerciFacteurApi\Client\ApiException $e) {

  echo "\n Erreur lors de l'envoi de la source \n";

  $error = json_decode($e->getResponseBody(), true);
  echo $error['error']['text'];
}
