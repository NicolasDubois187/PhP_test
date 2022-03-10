<link rel="stylesheet" href="style.css">
<?php

$db = 'mysql:host=127.0.0.1;dbname=ecole';
$db_user = "root";
$db_pwd = "";

try {
    $DBconnect = new PDO($db, $db_user, $db_pwd);
    $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo json_encode([
      "status" => "error",
      "message" => $e->getMessage()
    ]);
  }

    $req = "SELECT * FROM students";
    $students = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);
    
    // echo json_encode($data);
//   var_dump($data);
// $somme = 0;
// $somme += $student['trimestre1']['trimestre2']['trimestre3'];
// $average = $somme / count($student);
  foreach ($students as $student) {
      ?>
      <?php

        ?>
      <div class="student">

          <div class="identite">
              <h2><?php echo $student['name']; ?></h2>
              <img src="upload_directory/students/<?php echo $student['img']; ?>" alt="ici le portrait de l'eleve <?php echo $student['name']; ?>">    
          </div>
          <div class="infos">
              <h3>Classe : <?php echo $student['classe']; ?></h3>
              <p>Note premier trimestre : <?php echo $student['trimestre1']; ?></p>
              <p>Note second trimestre : <?php echo $student['trimestre2']; ?></p>
              <p>Note troisième trimestre : <?php echo $student['trimestre3']; ?></p>
              <p>Moyenne : <?php echo $average ?></p>
            </div>

      </div>
      <?php
    }
    ?>

   



