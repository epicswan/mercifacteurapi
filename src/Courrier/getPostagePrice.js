import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const modeEnvoi = "";
const cardFormat = "";
const cardPapier = "";
const cardCoin = "";
const letterPageNumber = 0;
const photoNumber = 0;

const opts = JSON.stringify({
  paysDestinataire: "FRANCE",
  idDestinataire: [],
  letterPrintSides: "recto",
});

//* Obtenir le montant d'un ou plusieurs courriers
const getPostagePriceCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.getPostagePrice(
  wwServiceId,
  wwAccessToken,
  modeEnvoi,
  cardFormat,
  cardPapier,
  cardCoin,
  letterPageNumber,
  photoNumber,
  opts,
  getPostagePriceCallback
);
