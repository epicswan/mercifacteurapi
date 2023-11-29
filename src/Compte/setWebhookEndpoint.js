import { CompteApi } from "merci-facteur-api";

const compte = new CompteApi();

const wwServiceId = "";
const wwAccessToken = "";

const url = "";

//* Définir l'url du endpoint webhook
const setWebhookEndpointCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default compte.setWebhookEndpoint(
  url,
  wwServiceId,
  wwAccessToken,
  setWebhookEndpointCallback
);
