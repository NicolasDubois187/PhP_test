// On récupère notre formulaire et notre liste
const form = document.querySelector('form')
const taskList = document.querySelector('ul')

// On crée un fonction pour  gérer l'affichage de notre liste
const displayTasks = async () => {

    // On réinitialise notre liste afin de ne pas avoir de doublon à chaque  fois qu'on appel notre fonction
    taskList.innerHTML = ""

    // On effectue notre requêtes au fichier traitement.php
    // Ici, on ne passe aucune données
    // Await = On attend d'avoir une réponse avant d'exécuter le code qui suit !
    const query = await fetch('./traitement.php')

    // Un fois la réponse obtenue on la parse au format JSON
    const res = await query.json()

    // On effectue une boucle pour parcourir notre tableau obtenue en réponse de notre requête
    for(let todo of res){
        // À chaque itération de notre tableau, nous créons une nouvelle entrée dans notre liste
        // Pour cela, on appel la fonction createTask()
    await createTask(todo)
    }
}
// On oublie pas de lancer notre fonction, sinon aucun affichage sera fait lors de notre arrivé sur la page
displayTasks()

/**
 * @param todo : Object
 * @returns {Promise<void>}
 * @description Fonction appelée pour créer une entrée dans notre liste
 */
async function createTask(todo){
    const li = document.createElement('li') // On crée un HTMLElement <li></li>
    const checkbox = document.createElement("input") // On crée un HTMLElement <input />
    checkbox.type = "checkbox" // On définit le type de notre input à checkbox
    checkbox.checked = todo.done // On définit si notre checkbox aura l'attribut "checked" ou non en fonction de la
    // propriété "done" de notre objet "todo"

    li.append(checkbox, todo.task) // On ajoute à notre HTMLElement <li></li> notre checkbox et la tâche sous forme
    // de chaîne de caractères
    taskList.appendChild(li) // On ajoute notre HTMLElement <li></li> à notre liste : taskList = <ul></ul>

    // On vient ajouter un écouteur d'évènement à notre checkbox
    checkbox.addEventListener("change", async () => {
        // Si l'attribut de notre checkbox à changé, on vérifie qu'elle a été décoché
        if(checkbox.checked){
            // On applique un setTimeout pour supprimer l'entrée de notre liste au bout de 1 seconde
            setTimeout(() => {
                taskList.removeChild(li)
            }, 1000)
        }

        // On crée un FormData()
        const data = new FormData()

        // On ajoute a notre FormData les clé "action" et "id" avec leur valeur respective afin de générer notre
        // requête vers notre fichier traitement.php
        data.append("action", "delete")
        data.append('id', todo.id)

        // On lance notre requête
        const query = await fetch('./traitement.php', {
            method: "POST",
            body : data
        })
        const res = await query.json()

        console.log(res)
    })
}

// Ici, on vient écouter notre formulaire afin d'éxécuter du code à sa soumission
form.addEventListener("submit", async (e) => {
    e.preventDefault()

    // On crée notre objet a envoyer avec la requête
    const data = new FormData(form)
    // On ajoute la clé "action" pour définir ce que l'on souhaite faire
    data.append('action', "add")

    // On effectue notre requête et on attend une réponse
    const query = await fetch('./traitement.php', {
        method: "POST",
        body: data
    })

    const res = await query.json()

    console.log(res)

    // Une fois que tout s'est bien passé, on actualise l'affichage de notre liste
    displayTasks()
})