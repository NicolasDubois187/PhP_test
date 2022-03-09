const form = document.querySelector("form");
const tbody = document.querySelector("tbody");
form.addEventListener("submit", (e) => {
  e.preventDefault();

  let formData = new FormData(form);
  formData.append("action", "add"); //Ajout d'une propriété

  // const xhr = new XMLHttpRequest();
  // xhr.open("POST", "./traitement.php");
  // xhr.responseType = "json";
  // xhr.send(formData);

  // xhr.onload = () => {
  //   if (xhr.status === 200) {
  //     const res = xhr.response;
  //   }
  // };

  fetch("./traitement.php", {
    header: {
      // "Content-Type": "application/json",
      // Accept: "application/json",
    },
    method: "POST",
    body: formData,
  })
    .then((response) => {
      // console.log(response);
      // console.log("la reponse est : " + response.ok);
      // console.log("le status est : " + response.status);
      // console.log("le statusText est : " + response.statusText);
      // console.log("le Text est : " + response.responseText);

      if (response.ok) {
        console.log("Tout ce passe bien");
        return response.json();
      } else {
        console.error("Erreur : " + response.statusText);
      }
      return response.json();
    })
    .then((res) => {
      // console.log(res);
      displayList();
    });
});

function displayList() {
  tbody.innerHTML = "";

  fetch("./traitement.php")
    .then((response) => response.json())
    .then((res) => {
      res.forEach((user) => {
        // console.log(user);
        // tbody.innerHTML += `
        // <tr>
        //     <th>${user.name}</th>
        //     <th>${user.phone}</th>
        //     <th>${user.email}</th>
        //     <th>${user.address}</th>
        //     <!-- <th><button class="btn delete">Supprimer</button></th>-->
        //   </tr>
        // `;

        const tr = document.createElement("tr");
        for (prop in user) {
          const th = document.createElement("th");
          th.innerText = user[prop];

          tr.appendChild(th);
        }
        const lastth = document.createElement("th");
        const btn = document.createElement("button");
        btn.innerText = " Delete";
        btn.classList.add("btn", "delete");
        btn.addEventListener("click", () => removeLine(user.email));

        lastth.appendChild(btn);

        tr.appendChild(lastth);

        tbody.appendChild(tr);
      });
    });
}
displayList();

function removeLine(email) {
  const formData = new FormData();
  formData.append("action", "delete");
  formData.append("email", email);
  fetch("./traitement.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => {
      if (response.ok) {
        return response.json();
      }
    })
    .then((res) => {
      console.log(res);
      displayList();
    });
}
