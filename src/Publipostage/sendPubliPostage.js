import { PublipostageApi } from "merci-facteur-api";

const publish = new PublipostageApi();

const wwServiceId = "";
const wwAccessToken = "";

const idEnvoi = 0;
const idExp = 0;
const jsonExp = "";
const modeEnvoi = "";
const anonymize = JSON.stringify({
  delay: 0,
  target: [""],
});

//* Envoi de la source de données du publipostage
const sendPublipostageCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default publish.sendPublipostage(
  idEnvoi,
  idExp,
  jsonExp,
  modeEnvoi,
  anonymize,
  wwServiceId,
  wwAccessToken,
  sendPublipostageCallback
);
