// console.log();
const ul = document.querySelector("ul");

const displayStud = () => {
  fetch("./read.php")
    .then((response) => response.json())
    .then((res) => {
      res.forEach((student) => {
        const li = document.createElement("li");
        li.append(student.name);
        // ul.appendChild(li);
        console.log(student);
      });
    });
};
displayStud();
