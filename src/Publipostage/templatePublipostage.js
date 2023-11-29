import { PublipostageApi } from "merci-facteur-api";

const publish = new PublipostageApi();

const wwServiceId = "";
const wwAccessToken = "";

const typeTemplate = "";
const template = "";

//* Envoi du template de la lettre à envoyer en nombre
const templatePublipostageCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default publish.templatePublipostage(
  typeTemplate,
  template,
  wwServiceId,
  wwAccessToken,
  templatePublipostageCallback
);
