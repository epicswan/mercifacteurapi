import { UserApi } from "merci-facteur-api";

const user = new UserApi();

const wwServiceId = "";
const wwAccessToken = "";

const emailUser = "";
const firstName = "";
const lastName = "";
const idUser = 0;

//* Modification d'un user
const updateUserCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default user.updateUser(
  emailUser,
  firstName,
  lastName,
  wwServiceId,
  wwAccessToken,
  idUser,
  updateUserCallback
);
