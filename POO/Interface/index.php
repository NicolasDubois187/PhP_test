<?php
require './Class/ModelInterface.php';
require './Class/User.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interface</title>
</head>

<body>
  <h1>Interface</h1>

  <h2>User</h2>
  <?php
  $pierre = new User("Pierre", "18");
  echo "ID : {$pierre->getId()}" . "<br>";
  echo "Nom : {$pierre->name}" . "<br>";
  echo "Age : {$pierre->age}" . "<br>";
  ?>
  <hr>
  <?php
  $john = new User("John", "25");
  echo "ID : {$john->getId()}" . "<br>";
  echo "Nom : {$john->name}" . "<br>";
  echo "Age : {$john->age}" . "<br>";
  ?>
  <hr>
  <?php
  $jack = new User("Jack", "32");
  echo "ID : {$jack->getId()}" . "<br>";
  echo "Nom : {$jack->name}" . "<br>";
  echo "Age : {$jack->age}" . "<br>";
  ?>
  <hr>
  <?php
  echo "Nombre de User : " . User::getTotalUser();
  ?>
</body>

</html>