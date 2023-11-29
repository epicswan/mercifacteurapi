import { CompteApi } from "merci-facteur-api";

const compte = new CompteApi();

const wwServiceId = "";
const wwAccessToken = "";

//* Obtenir l'url de webhook du compte
const getWebhookEndpointCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default compte.getWebhookEndpoint(
  wwServiceId,
  wwAccessToken,
  getWebhookEndpointCallback
);
