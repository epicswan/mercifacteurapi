import { UserApi } from "merci-facteur-api";

const user = new UserApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = 0;

//* Suppression d'un user
const deleteUserCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};

export default user.deleteUser(
  wwServiceId,
  wwAccessToken,
  idUser,
  deleteUserCallback
);
