import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const idEnvoi = 0;

//* Annuler un envoi
const deleteEnvoiCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.deleteEnvoi(
  wwServiceId,
  wwAccessToken,
  idEnvoi,
  deleteEnvoiCallback
);
