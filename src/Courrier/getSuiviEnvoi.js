import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const idEnvoi = 0;

//* Obtenir le suivi et l'état des courriers d'un envoi
const getSuiviEnvoiCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.getSuiviEnvoi(
  wwServiceId,
  wwAccessToken,
  idEnvoi,
  getSuiviEnvoiCallback
);
