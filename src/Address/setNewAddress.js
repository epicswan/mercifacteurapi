import { AdressApi } from "merci-facteur-api";

const address = new AdressApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = 25060;
const type = "dest";
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
  phone: "",
  email: "",
  consent: 0,
};
const opts = JSON.stringify(addressData);

//* === Création d'une nouvelle adresse ===
const setNewAddressCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default address.setNewAddress(
  wwServiceId,
  wwAccessToken,
  idUser,
  type,
  opts,
  setNewAddressCallback
);
