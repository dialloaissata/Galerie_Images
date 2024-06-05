const ajaxSrc = document.currentScript.src;
const ajaxUrlParams = new URLSearchParams(ajaxSrc.split("?")[1]);
// Pour pouvoir recuperer le type de l'image
const typeName = ajaxUrlParams.get("type") || "";
// console.log(typeName);

var start = getImageCount();
var count = start;

// Renvois un nombre d'image différents en fonction de la taille de l'écran
function getImageCount() {
if (window.innerWidth >= 1140) {
    // Desktop
    return 6;
  } else if (window.innerWidth >= 742) {
    // tablet
    return 2;
  } else {
    // Mobile phone
    return 1;
  }
}

function loadMore() {
  fetch("assets/models/getImages.php?start=" + start + "&count=" + count + "&type=" + typeName )
    .then(function (response) {
      if (response.ok) {
        return response.json();
      }
      throw new Error("La réponse réseau n'était pas correcte.");
    })
    .then(function (images) {
      // Ajouter des images à l'élément conteneur
      images.forEach(function (img) {
        const html = `<img src="assets/img/${img.imageName}" alt="${img.imageDescription}" />`;
        document
          .getElementById("container") // <section id="container"> de l'image 
          .insertAdjacentHTML("beforeend", html);
      });
      // Mettre à jour l'index de départ pour l'appel fetch suivant
      start += count;
    })
    .catch(function (error) {
      console.error("Error:", error);
    });
}

const buttonElt = document.querySelector("button");
buttonElt.addEventListener("click", function () {
    loadMore();
});