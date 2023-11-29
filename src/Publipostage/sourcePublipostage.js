import { PublipostageApi } from "merci-facteur-api";

const publish = new PublipostageApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = 0;
const templateValidation = JSON.stringify({
  timeTemplate: 0,
  template: "",
  inputs: [
    "Total_impaye",
    "adresse1",
    "adresse2",
    "adresse3",
    "civilite",
    "cp",
    "date_courrier",
    "delai_relance",
    "nom",
    "prenom",
    "ref_client",
    "ville",
  ],
  key: "",
  nbPage: 0,
});
const source = JSON.stringify({
  type: "json",
  value: [
    {
      date_courrier: "22/02/2018",
      civilite: "",
      societe: "",
      nom: "",
      prenom: "",
      adresse1: "",
      adresse2: "",
      adresse3: "",
      cp: "",
      ville: "",
      pays: "",
      delai_relance: 1,
      Total_impaye: 1,
      ref_client: 123,
    },
  ],
});

//* Envoi de la source de données du publipostage
const sourcePublipostageCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default publish.sourcePublipostage(
  idUser,
  templateValidation,
  source,
  wwServiceId,
  wwAccessToken,
  sourcePublipostageCallback
);
