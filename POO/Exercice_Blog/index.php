<?php
// On démarre notre session
session_start();
// On stocke un boolean dans notre variable $connected : true si on a une session, false si non
$connected = $_SESSION && $_SESSION['connected']
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="app.js" defer></script>
  <link rel="stylesheet" href="style.css">
  <title>Blog</title>
</head>

<body>

  <header>
    <?php
    // Si on est pas connecté, on affiche le formulaire de connection
    if (!$connected) {
    ?>
      <form id="formConnect" method="POST">
        <label for="email">Identifiant</label>
        <input type="text" name="email" id="email">

        <label for="pwd">Mot de passe</label>
        <input type="password" name="pwd" id="pwd">

        <input type="submit" value="Connexion">
      </form>
    <?php
    } else {
      // Sinon on affiche le formulaire de déconnexion
    ?>
      <form id="formDeco">
        <input type="submit" value="Déconnexion">
      </form>
    <?php
    }
    ?>
  </header>

  <main>
    <h1>mon super blog</h1>
    <?php
    // Si on est connecté, on affiche le formulaire d'ajout d'article
    if ($connected) {
    ?>
      <h2>Ajouter un article</h2>
      <form id="formBlog" action="./traitement.php" method="POST">
        <div class="form-group">
          <label for="title">Titre</label>
          <input type="text" name="title" id="title">
        </div>

        <div class="form-group">
          <label for="title">Contenue</label>
          <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
          <label for="title">Auteur</label>
          <input type="text" name="author" id="author">
        </div>

        <input type="submit" value="Publier">
      </form>

      <hr>
    <?php
    }
    ?>
    <div id="blog"></div>
  </main>
</body>

</html>