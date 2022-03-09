<?php
require('./Class/Meuble.php')
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programmation Orienté Objets</title>
</head>

<body>
  <h1>Déclaration litéral</h1>
  <?php
  $canape = (object) array(
    "marque" => "GRÖNLID",
    "matiere" => "Cuir",
    //etc...
  );
  echo "Marque : {$canape->marque}" . "<br>";
  echo "Marque : {$canape->matiere}" . "<br>";
  ?>

  <h1>Programmation Orienté Objets</h1>

  <h2>Table</h2>
  <pre>
<?php
$table = new Table;
$table->marque = "Klak";
$table->matiere = "Marbre";
$table->pieds = 4;

var_dump($table)
?>
  </pre>

  <hr>

  <?php
  echo "marque : {$table->marque}" . "<br>";
  echo "matière : {$table->matiere}" . "<br>";
  echo "{$table->plier()}" . "<br>";
  ?>

  <h2>Chaise</h2>

  <?php
  $chaise = new Chaise("fanbyn", "bois", 4);
  echo "marque : {$chaise->marque}" . "<br>";
  echo "matière : {$chaise->matiere}" . "<br>";
  echo "pieds : {$chaise->pieds}" . "<br>";
  echo "{$chaise->plier()}" . "<br>";
  ?>

  <h2>Tabouret</h2>
  <?php
  $tabouret = new Tabouret("Kyyr", "fer", 3);
  echo "marque : {$tabouret->marque}" . "<br>";
  echo "matière : {$tabouret->getMatiere()}" . "<br>";
  echo "matière : {$tabouret->getPieds()}" . "<br>";
  echo "**modifications**" . "<br>";
  $tabouret->marque = "Flistat";
  echo "marque : {$tabouret->marque}" . "<br>";
  $tabouret->matiere = "métal"; // Aucun impacte parce que propriétée private
  echo "matière : {$tabouret->getMatiere()}" . "<br>";
  $tabouret->setMatiere("métal");
  echo "matière : {$tabouret->getMatiere()}" . "<br>";
  $tabouret->setPieds(2);
  echo "matière : {$tabouret->getPieds()}" . "<br>";
  ?>

  <h2>Meuble</h2>
  <?php
  $meuble = new Meuble("brown", "Kallax");
  $meuble1 = new Meuble("brown", "Kallax");
  $meuble2 = new Meuble("brown", "Kallax");
  echo "couleur : {$meuble->color}" . "<br>";
  echo "marque : {$meuble->marque}" . "<br>";
  echo "fabricant : " . Meuble::FABRIQUANT . "<br>";
  echo "Nombre de meuble fabriqué : " . Meuble::$nbrDeMeuble . "<br>";
  echo "Nombre de meuble fabriqué (depuis l'objet) : {$meuble->getNbrObjet()}" . "<br>";
  ?>
</body>

</html>