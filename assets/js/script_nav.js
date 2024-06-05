/* 
    Ce code permet de créer un comportement d'ouverture/fermeture 
    de menu responsive(que j'ai appelé menu Burger) lorsque l'utilisateur 
    clique sur l'icône du menu dans la barre de navigation. 
*/
const menuButton = document.querySelector('header nav img'); 
const nav = document.querySelector('header nav ul'); 
menuButton.addEventListener('click', function() {
    nav.classList.toggle('active');
});

/*
Memo pour savoir d'ou vient active: 
console.log(menuButton);
header nav ul.active {
    margin-left: 0;
  }*/