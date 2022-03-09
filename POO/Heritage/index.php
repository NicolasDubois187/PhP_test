<?php
require 'Class/Animal.php';

require 'Class/Chien.php';
require 'Class/Chat.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Héritage</title>
</head>

<body>
  <h1>Héritage</h1>
  <h2>Chien</h2>

  <?php
  $youri = new Chien("Rottweiler", "Youri", 4, "noire/feu", "court");
  echo "Nom : {$youri->nom}" . "<br>";
  echo "Aboyer : {$youri->type}" . "<br>";
  echo "Race : {$youri->race}" . "<br>";
  echo "Couleur : {$youri->couleur}" . "<br>";
  echo "Aboyer : {$youri->aboyer()}" . "<br>";
  echo "Aboyer : {$youri->dormir()}" . "<br>";
  ?>

  <h2>Chat</h2>

  <?php
  $lilou = new Chat("Isabelle", "Lilou", 4, "Blanc/Roux/Noire", "court");
  echo "Nom : {$lilou->nom}" . "<br>";
  echo "Aboyer : {$lilou->type}" . "<br>";
  echo "Race : {$lilou->race}" . "<br>";
  echo "Couleur : {$lilou->couleur}" . "<br>";
  echo "Aboyer : {$lilou->miauler()}" . "<br>";
  echo "Aboyer : {$lilou->manger()}" . "<br>";
  ?>

  <hr>
  <?php
  echo "Nombre d'instance de la classe Animal : " . Animal::$total;
  ?>
</body>

</html>