import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const idEnvoi = 0;

//* Lister les courriers d'un envoi
const getEnvoiCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.getEnvoi(
  wwServiceId,
  wwAccessToken,
  idEnvoi,
  getEnvoiCallback
);
