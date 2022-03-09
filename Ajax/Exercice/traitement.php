<?php
    $db = 'mysql:host=127.0.0.1;dbname=async_await';
    $db_user = "root";
    $db_pwd = "root";
  // var_dump($_POST);


  if(!empty($_POST)){

    //Connection à la BDD
    try{
          // Connection à la base de données
          $DBconnect = new PDO($db, $db_user, $db_pwd);
          // $DBconnect->exec("SET NAMES utf8");
          $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e){
      echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
      ]);
    }

    switch ($_POST['action']) {
      case 'add':
        $data = [
        "name" => $_POST['name'],
        "phone" => $_POST['phone'],
        "email" => $_POST['email'],
        "address" => $_POST['address'],
        ];

        try{
          //Préparation de la requète
          $req = $DBconnect->prepare('INSERT INTO myTable(name, phone, email, address) VALUES(:name, :phone, :email, :address)');

          //Éxécution de la requête 
          $req->execute($data);

          echo json_encode([
            "status" => "ok",
            "message" => "Ajout efféctué avec succès"
          ]);

          // echo json_encode($_POST);
      
        }catch(PDOException $e){
          echo json_encode([
            "status" => "error",
            "message" => $e->getMessage()
          ]);
        }
        break;
      case 'delete':
        // echo json_encode("delete");
        // //!!! Pensez à sécuriser la variable !!!
        $email = $_POST['email'];

        try{
          $sql = "DELETE FROM myTable WHERE email = '$email'";
          $req = $DBconnect->prepare($sql);
          $req->execute();

          echo json_encode([
            "status" => "ok",
            "message" => "Suppression efféctué avec succès"
          ]);

        } catch(PDOException $e){
          echo json_encode([
            "status" => "error",
            "message" => $e->getMessage()
          ]);
        }
      default:
        # code...
        break;
    }
    
    // echo json_encode($data);
  } else {
    try{
            // Connection à la base de données
      $DBconnect = new PDO($db, $db_user, $db_pwd);
      // $DBconnect->exec("SET NAMES utf8");
      $DBconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

      $req = "SELECT name, phone, email, address FROM myTable";
      $data = $DBconnect->query($req)->fetchAll(PDO::FETCH_ASSOC);

      echo json_encode($data);

    }catch(PDOException $e){
      echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
      ]);
    };
  }




?>