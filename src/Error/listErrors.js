import { ErrorsApi } from "merci-facteur-api";

const error = new ErrorsApi();

const wwServiceId = "";
const wwAccessToken = "";

//* Obtenir la liste des erreurs possiblement retournées par l'API
const listErrorsCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default error.listErrors(wwServiceId, wwAccessToken, listErrorsCallback);
