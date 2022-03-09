<?php
require './Class/Interfaces/PokemonInterface.php';
require './Class/Pokemon.php';
require './Class/Carapuce.php';
require './Class/Salameche.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Salameche</h2>
  <?php
  $pokemon1 = new Salameche("Salameche");
  echo "Nom : {$pokemon1->name}" . "<br>";
  echo "Dégats : {$pokemon1->getDamage()}" . "<br>";
  echo "Point de vie : {$pokemon1->getLife()}" . "<br>";
  ?>
  <h2>Carapuce</h2>
  <?php
  $pokemon2 = new Carapuce("Carapuce");
  echo "Nom : {$pokemon2->name}" . "<br>";
  echo "Dégats : {$pokemon2->getDamage()}" . "<br>";
  echo "Point de vie : {$pokemon2->getLife()}" . "<br>";
  ?>

  <hr>

  <h2>Combat</h2>
  <?php
  $pokemon1->makeAttack($pokemon2, $pokemon1->getDamage())
  ?>
  <hr>
  <?php
  $pokemon2->makeAttack($pokemon1, $pokemon2->getDamage());
  $pokemon2->levelUp();
  ?>
  <hr>
  <?php
  $pokemon1->makeAttack($pokemon2, $pokemon1->getDamage());
  $pokemon1->levelUp();
  ?>
  <hr>
  <?php
  $pokemon2->makeAttack($pokemon1, $pokemon2->getDamage());
  $pokemon2->levelUp();
  ?>
  <hr>
  <?php
  $pokemon1->makeAttack($pokemon2, $pokemon1->getDamage());
  $pokemon1->evolue();
  ?>
  <hr>
  <?php
  $pokemon1->makeAttack($pokemon2, $pokemon1->getDamage());
  ?>

</body>

</html>