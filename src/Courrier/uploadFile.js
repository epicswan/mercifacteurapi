import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = 0;
const token = "";
const product = "";
const type = "";
const file = "";

//* Charger des fichiers dans un token
const uploadFileCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.uploadFile(
  idUser,
  token,
  product,
  type,
  file,
  wwServiceId,
  wwAccessToken,
  uploadFileCallback
);
