const form1 = document.querySelector('main div:first-child form');
const form2 = document.querySelector('main div:last-child form');

//vérifie si l'email correspond au format d'une adresse e-mail valide 
const emailCheck = (email) => /[a-zA-Z0-9-.]+@[a-zA-Z0-9-.]+\.[a-z]{2,}/.test(email);

// Recupere les id email de chaque formulaire(1 et 2)
const email1 = form1.querySelector('#email');
const email2 = form2.querySelector('#emailGet');

// Recupere les id email de chaque formulaire(1 et 2)
// C'est juste que ces 2 variables serviront de test d'erreur
const errorContainer1 = form1.querySelector('#email');
const errorContainer2 = form2.querySelector('#emailGet');

const eventInputEmail1 = function (event) {
  if (emailCheck(email1.value)) {
    email1.classList.remove('error');
    errorContainer1.innerText = '';
  } else {
    errorContainer1.innerText = 'L\'email n\'a pas le bon format';
    email1.classList.add('error');
  }
}

const eventInputEmail2 = function (event) {
  if (emailCheck(email2.value)) {
    email2.classList.remove('error');
    errorContainer2.innerText = '';
  } else {
    errorContainer2.innerText = 'L\'email n\'a pas le bon format';
    email2.classList.add('error');
  }
}

form1.addEventListener('submit', (event) => {
  event.preventDefault();
  const email1 = form1.querySelector('#email');
  eventInputEmail1({ target: email1 });
  email1.addEventListener('input', eventInputEmail1);
  const formData = new FormData(form1);
  fetch(form1.action, {
    method: form1.method,
    body: formData
  }).then(response => {
    if (response.ok) {
      alert('Message envoyé (-: ');
    } else {
      alert('Une erreur s\'est produite. Veuillez réessayer plus tard.');
    }
  }).catch(error => {
    alert('Une erreur s\'est produite. Veuillez réessayer plus tard.');
  });
   // nettoie les champs du formulaire
   form1.reset();
});

// console.log(errorContainer1);


form2.addEventListener('submit', (event) => {
  event.preventDefault();
  const email2 = form2.querySelector('#emailGet');
  eventInputEmail2({ target: email2 });
  email2.addEventListener('input', eventInputEmail2);
  const url = `${form2.action}?${new URLSearchParams(new FormData(form2))}`;
  fetch(url, {
    method: form2.method
  }).then(response => {
    if (response.ok) {
      alert('Message envoyé (-: ');
    } else {
      alert('Une erreur s\'est produite. Veuillez réessayer plus tard.');
    }
  }).catch(error => {
    alert('Une erreur s\'est produite. Veuillez réessayer plus tard.');
  });
   // nettoie les champs du formulaire
   form2.reset();
});


