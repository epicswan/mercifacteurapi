import { SavApi } from "merci-facteur-api";

const sav = new SavApi();

const wwServiceId = "";
const wwAccessToken = "";

const opts = JSON.stringify({
  yourServiceName: "",
  email: "",
  referenceCourrier: "",
  sujet: "",
  messageTexte: "",
});

//* Ouvrir un ticket SAV
const openSavTicketCallback = (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log("API called successfully. Returned data: " + data);
  }
};
export default sav.openSavTicket(
  wwServiceId,
  wwAccessToken,
  opts,
  openSavTicketCallback
);
