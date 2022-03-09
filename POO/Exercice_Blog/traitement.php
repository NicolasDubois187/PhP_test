<?php
// On démarre la session qui va nous permettre de stocker un utilisateur à la connexion
session_start();

require './Class/Form.php';
require './Class/Posts.php';

$db = 'mysql:host=127.0.0.1;dbname=exo_myBlog';
$db_user = "root";
$db_pwd = "root";

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

if (!empty($_POST)) {

    // Si on passe des information à notre requête
    switch ($_POST['action']) {
        case 'connect':
            // Si on essaie de se connecter, on récupère et on sécurise les entrées utilisateur
            //  On oublie pas : Never Trust User Input
            $user = Form::secure($_POST['email']);
            $pwd = Form::secure($_POST['pwd']);

            // On vient chercher dans notre BDD si un utilisateur correspond à l'email envoyé
            $req = "SELECT email, password, roles FROM users WHERE email = '" . $user . "'";
            $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);

            // Si un utilisateur est trouvé
            if (!empty($data)) {
                // On vérifie si le mot de passe correspond
                if (password_verify($pwd, $data[0]['password'])) {
                    // On instancie notre variable superglobal $_SESSION qui est un tableau
                    // On lui ajoute la clé "connected" et sa valeur "true"
                    $_SESSION['connected'] = true;

                    echo json_encode([
                        "status" => "ok",
                        "message" => "Vous êtes connecté",
                    ]);
                } else {
                    echo json_encode([
                        "status" => "error",
                        "message" => "Identifiant ou mot de passe incorrect"
                    ]);
                }
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "Identifiant ou mot de passe incorrect"
                ]);
            };
            break;
        case 'deconnect':
            // Si on souhaite se déconnecter, on détruit notre session
            session_destroy();

            echo json_encode([
                "status" => "ok",
                "message" => "Vous êtes déconnecté"
            ]);
            break;
        case 'add':

            // Si on souhaite ajouter une entrée à notre BDD
            // On sécurise les entrées utilisateur
            $title = Form::secure($_POST['title']);
            $content = Form::secure($_POST['content']);
            $author = Form::secure($_POST['author']);

            // On crée un nouvel objet  qui représentera notre article
            $data = new Posts($title, $content, $author);

            // On vérifie que les règles de validations sont respectées
            if ($data->isValide()) {
                $req = $DBconnect->prepare('INSERT INTO posts(title, content, author) VALUES(:title, :content, :author)');
                $req->execute($data->getArray());

                echo json_encode([
                    "status" => "ok",
                    "message" => "Ajout effectué avec succès"
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "Vous ne respectez pas les règles de validations"
                ]);
            }

            break;

        default:
            # code...
            break;
    }
} else {
    // Si pas d'informations à notre requêtes
    $req = "SELECT title, content, author, created_at FROM posts";
    $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
}
