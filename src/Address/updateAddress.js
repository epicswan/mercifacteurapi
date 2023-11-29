import { AdressApi } from "merci-facteur-api";

const address = new AdressApi();

const wwServiceId = "";
const wwAccessToken = "";

const idAddress = 1600737;
const addressData = {
  logo: "",
  civilite: "",
  nom: "",
  prenom: "",
  societe: "",
  adresse1: "",
  adresse2: "",
  adresse3: "",
  cp: "",
  ville: "",
  pays: "",
  phone: "+",
  email: "",
  consent: 0,
};
const opts = JSON.stringify(addressData);

//* Mettre à jour une adresse
const updateAddressCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default address.updateAddress(
  wwServiceId,
  wwAccessToken,
  idAddress,
  opts,
  updateAddressCallback
);
