import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = 0;

//* Lister les 50 derniers envois
const listEnvoisCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.listEnvois(
  wwServiceId,
  wwAccessToken,
  idUser,
  listEnvoisCallback
);
