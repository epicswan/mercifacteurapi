import { CompteApi } from "merci-facteur-api";

const compte = new CompteApi();

const wwServiceId = "";
const wwAccessToken = "";

//* Obtenir les infos de quotas
const getQuotaCompteCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default compte.getQuotaCompte(
  wwServiceId,
  wwAccessToken,
  getQuotaCompteCallback
);
