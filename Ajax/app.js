//
// RÉCUPÉRATION
//
const formGit = document.querySelector("#formGitHub");

/**
 * Create a card that will be added to its container
 * @param {HTMLElement} wrapper container of our cards
 * @param {Object} data data downloaded from the API
 */
const createCard = (wrapper, data) => {
  let card = document.createElement("div"); //On crée une division qui sera notre carte
  card.classList.add("card"); // On lui ajoute la class ".card"

  wrapper.innerHTML = ""; // Pour nettoyer le container à chaque recherche

  // On structure notre carte
  card.innerHTML = `
       <img src="${data.avatar_url}" alt="user profile picture">
        <h2>${data.login}</h2>
        <h3>${data.name}</h3>
        <p>Utilisateur créé le ${new Date(data.created_at).toLocaleDateString()}</p>
        <p>Nombre de repos: ${data.public_repos}</p>
        <a class="button" href="${data.html_url}">Voir</a>
      `;

  // On ajoute notre carte à son container
  wrapper.appendChild(card);
};

//XMLHttpRequest
let wrapper_xml = document.querySelector(".wrapper.xml");

formGit.addEventListener("submit", (e) => {
  e.preventDefault();

  const xhr = new XMLHttpRequest();

  xhr.open("GET", `https://api.github.com/users/${e.srcElement[0].value}`);
  xhr.responseType = "json"; // on indique qu'on veut une réponse au format json
  xhr.send();

  xhr.onload = () => {
    if (xhr.status === 200) {
      const res = xhr.response;
      createCard(wrapper_xml, res);
    }
  };

  //Si la requête n'a pas pu aboutir...
  xhr.onerror = function () {
    alert("La requête a échoué");
  };
});

//Fetch
wrapper_fetch = document.querySelector(".wrapper.fetch");

formGit.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(`https://api.github.com/users/${e.srcElement[0].value}`)
    .then((res) => res.json())
    .then((res) => {
      createCard(wrapper_fetch, res);
    });
});

//Asynch/Await
wrapper_async = document.querySelector(".wrapper.async");

formGit.addEventListener("submit", async (e) => {
  e.preventDefault();
  const response = await fetch(`https://api.github.com/users/${e.srcElement[0].value}`);
  if (response.ok) {
    const data = await response.json();

    createCard(wrapper_async, data);
  }
});

//
// ENVOIS
//

const form = document.querySelector("form#connexion");
wrapper_connect = document.querySelector(".wrapper.connect");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(form);

  fetch("./traitement.php", {
    method: "POST",
    body: formData,
  })
    .then((res) => res.json())
    .then((response) => {
      console.log(response);
      if (response.statue === 200) {
        wrapper_connect.innerHTML = `Bonjour ${response.data.pseudo}, vous avez ${response.data.age} ans, et vous habitez au ${response.data.address}`;
      } else {
        wrapper_connect.innerHTML = "Erreur de connection !";
      }
    });
});
