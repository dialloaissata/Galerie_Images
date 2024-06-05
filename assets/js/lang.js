/*
  Ce code écoute les événements de changement de sélection 
  de la liste déroulante "langSelect". 
*/
const scriptSrc = document.currentScript.src;
const urlParams = new URLSearchParams(scriptSrc.split("?")[1]);
const parentName = urlParams.get("parent") || "";

const langSelect = document.getElementById("lang");

langSelect.addEventListener("change", (event) => {
  const selectedValue = event.target.value;
  window.location.href="/"+parentName+"?lang="+selectedValue;
});