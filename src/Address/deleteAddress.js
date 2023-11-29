import { AdressApi } from "merci-facteur-api";

const address = new AdressApi();

const wwServiceId = "";
const wwAccessToken = "";

const idAddress = 0;

//* Suppression d'une adresse
const deleteAddressCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default address.deleteAddress(
  wwServiceId,
  wwAccessToken,
  idAddress,
  deleteAddressCallback
);
