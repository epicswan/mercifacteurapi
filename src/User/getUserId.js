import { UserApi } from "merci-facteur-api";

const user = new UserApi();

const wwServiceId = "";
const wwAccessToken = "";

const emailUser = "";

//* Récupération d'un id à partir de l'email
const getUserIdCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default user.getUserId(
  wwServiceId,
  wwAccessToken,
  emailUser,
  getUserIdCallback
);
