const formConnect = document.querySelector("#formConnect");
const formBlog = document.querySelector("#formBlog");
const formDeco = document.querySelector("#formDeco");

if (formConnect) {
  formConnect.addEventListener("submit", async (e) => {
    e.preventDefault();

    const data = new FormData(formConnect);
    data.append("action", "connect");

    const query = await fetch("./traitement.php", {
      method: "POST",
      body: data,
    });
    const response = await query.json();

    // console.log(response);

    if (response.status === "ok") location.reload();
    else console.log(response.message);
  });
}
if (formDeco) {
  formDeco.addEventListener("submit", async (e) => {
    e.preventDefault();

    const data = new FormData();
    data.append("action", "deconnect");

    const query = await fetch("./traitement.php", {
      method: "POST",
      body: data,
    });

    const response = await query.json();

    if (response.status === "ok") location.reload();
    else console.log(response.message);
  });
}
if (formBlog) {
  formBlog.addEventListener("submit", async (e) => {
    e.preventDefault();

    const data = new FormData(formBlog);
    data.append("action", "add");

    const query = await fetch("./traitement.php", {
      method: "POST",
      body: data,
    });

    const response = await query.json();

    console.log(response);

    displayPosts();
  });
}

const fetchPosts = async () => {
  const query = await fetch("./traitement.php");

  const response = await query.json();

  // console.log(response);
  return response;
};
const displayPosts = async () => {
  const listPosts = document.querySelector("#blog");
  listPosts.innerHTML = "";

  const data = await fetchPosts();

  // console.log(data);

  for (post of data) {
    // console.log(post);

    const title = document.createElement("h3");
    title.innerText = post.title;

    const info = document.createElement("div");
    info.classList.add("info");
    info.innerHTML = `Par <span>${post.author}</span> le <span>${new Date(post.created_at).toLocaleDateString()}</span>`;

    const para = document.createElement("p");
    para.innerText = post.content;

    const article = document.createElement("article");
    article.append(title, info, para);

    listPosts.appendChild(article);
  }
};

displayPosts();
