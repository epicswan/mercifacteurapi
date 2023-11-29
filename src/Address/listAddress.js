import { AdressApi } from "merci-facteur-api";

const address = new AdressApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = 0;
const type = "";
const opts =
  '{"logo":"","civilite":"","nom":"","prenom":"","societe":"","adresse1":"","adresse2":"","":"","cp":"","ville":"","pays":"","phone":"","email":"","consent":""}';

//* Lister les adresses du carnet d'adresse
const listAddressCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default address.listAddress(
  wwServiceId,
  wwAccessToken,
  idUser,
  type,
  opts,
  listAddressCallback
);
