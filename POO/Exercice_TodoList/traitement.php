<?php
// On vient charger notre class
require "./Class/Todo.php";

// On instancie nos variable de connexion à notre BDD
$db = 'mysql:host=127.0.0.1;dbname=Todos';
$db_user = "root";
$db_pwd = "root";

// On essaie de se connecter
// Si une erreur survient, on la capture dans notre "catch' et on renvoi l'erreur
try {
    // Connection à la base de données
    $DBconnect = new PDO($db, $db_user, $db_pwd);
    $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
    die;
};


// Si la connexion à la base de donnée s'est bien déroulée
// On vérifie si on a des informations qui sont passées dans notre requête

// Si aucune info n'est passé = $_POST == null
if(empty($_POST)){
    // Alors on effectue une simple requête pour récupérer les informations
    // ! Ici, un try{} catch {} serait fortement recommandé pour tester notre requête!
    try {
        $req = "SELECT id, task, done FROM Todo";
        $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo json_encode([
            "status" => "error",
            "message" => $e->getMessage()
        ]);
        die;
    };

    // Pas d'erreur, on renvoi à notre fichier JavaScript les données récupérées
    echo json_encode($data);
} else {
    // Si des informations sont passées à notre requête
    // Alors cela signifie qu'on essaie d'effectuer une action
    // On vérifie  donc avec un switch quelle action nous souhaitons exécuter
    switch ($_POST['action']){
        // Si on demande à ajouter une information
        case "add" :
            // On vérifie que tâche envoyé respecte bien les condition de validation stipulé dans notre Class Todo
            // via la méthode static validate()
            if(Todo::validate($_POST['task'])){

                // Si c'est le cas, on crée un nouvel objet
                $todo = new Todo($_POST['task']);

                try {
                    // On prépare notre requête
                    $req = $DBconnect->prepare('INSERT INTO Todo(task) VALUES(:task)');

                    //On l'envoit : ne pas oublier, ici il faut lui passer un tableau ! D'où notre méthode getArray()
                    $req->execute($todo->getArray());
                } catch (PDOException $e) {
                    echo json_encode([
                        "status" => "error",
                        "message" => $e->getMessage()
                    ]);
                    die;
                };

                // Si pas d'erreur, on renvoie simplement un message pour dire que c'est Ok !
                echo json_encode([
                    "code" => 200,
                    "message" => "Ajout effectué avec succès"
                ]);
            }
            else{
                echo json_encode([
                    "code" => 301,
                    "message" => "Vous ne respectez pas les règles de validations"
                ]);
            }
            break;
        // Si on demande à supprimer une information
        case "delete" :
            try {
                // On prépare notre requête
                $req = "DELETE FROM Todo WHERE id = " . $_POST['id'] . ";";
                $req = $DBconnect->prepare($req);
                // On l'envoie
                $req->execute();
            } catch (PDOException $e) {
                echo json_encode([
                    "status" => "error",
                    "message" => $e->getMessage()
                ]);
                die;
            };

            // Si pas d'erreur, on renvoie un message de validation
            echo json_encode([
                "code" => 200,
                "message" => "Suppression faite !"
            ]);
        break;
    }
}