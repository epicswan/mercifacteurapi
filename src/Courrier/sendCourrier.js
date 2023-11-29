import { CourrierApi } from "merci-facteur-api";

const courrier = new CourrierApi();

const wwServiceId = "";
const wwAccessToken = "";

const idUser = "";
const modeEnvoi = "";
const address = JSON.stringify({
  exp: "",
  dest: [""],
});
const dateEnvoi = "";
const designation = "";
const anonymize = JSON.stringify({
  delay: 0,
  target: [""],
});
const content = JSON.stringify({
  letter: {
    files: [""],
    base64files: [""],
    final_filename: "",
    print_sides: "",
  },
  photo: {
    files: [""],
    base64files: [""],
    tokenLibrary: "",
  },
  card: {
    format: "",
    visuel: {
      type: "",
      value: "",
    },
    text: {
      type: "",
      value: "",
    },
    coin: "",
    papier: "",
  },
});

//* Valider un envoi de courrier
const sendCourrierCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default courrier.sendCourrier(
  idUser,
  modeEnvoi,
  address,
  dateEnvoi,
  designation,
  anonymize,
  content,
  wwServiceId,
  wwAccessToken,
  sendCourrierCallback
);
