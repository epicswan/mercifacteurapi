import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const trackingNumber = "";
const document = "";

//* Obtenir les documents preuves d'un courrier
const getProofCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.getProof(
  wwServiceId,
  wwAccessToken,
  trackingNumber,
  document,
  getProofCallback
);
