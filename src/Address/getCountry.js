import { AdressApi } from "merci-facteur-api";

const address = new AdressApi();

const wwServiceId = "";
const wwAccessToken = "";

const zone = "";

//* Récupération des pays disponibles
const getCountryCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default address.getCountry(
  wwServiceId,
  wwAccessToken,
  zone,
  getCountryCallback
);
