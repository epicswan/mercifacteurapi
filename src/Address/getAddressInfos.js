import { AdressApi } from "merci-facteur-api";

const address = new AdressApi();

const wwServiceId = "";
const wwAccessToken = "";

const idAddress = 0;

//* Récupération des infos de l'adresse
const getAddressInfosCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default address.getAddressInfos(
  wwServiceId,
  wwAccessToken,
  idAddress,
  getAddressInfosCallback
);
