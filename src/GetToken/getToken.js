import { GetTokenApi } from "merci-facteur-api";

const tokenAccess = new GetTokenApi();

const wwServiceSignature = "";
const wwTimestamp = "";
const wwServiceId = "";
const wwAuthorizedIps = [""];

//* Récupération d'un token
const getTokenCallback = (error, data) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default tokenAccess.getToken(
  wwServiceSignature,
  wwTimestamp,
  wwServiceId,
  wwAuthorizedIps,
  getTokenCallback
);
