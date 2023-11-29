import { UserApi } from "merci-facteur-api";

const user = new UserApi();

const wwServiceId = "";
const wwAccessToken = "";

const emailUser = "";
const firstName = "";
const lastName = "";

//* Création d'un user
const setUserCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default user.setUser(
  emailUser,
  firstName,
  lastName,
  wwServiceId,
  wwAccessToken,
  setUserCallback
);
