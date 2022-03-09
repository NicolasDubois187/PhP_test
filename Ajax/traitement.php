<?php 
if($_POST){

  // Connection BDD + traiteùent input sécurité
  // On simule un retour BDD
  $data = [
    "email" => "toto@gmail.com",
    "pseudo" => "toto",
    "password" => "1234",
    "age" => 34,
    "address" => "1 rue du code"
  ];
  

  // On récup les entrées utilisateur
  // !Penser à les sécuriser!
  $sendingID = $_POST['email'];
  $sendingPWD = $_POST['password'];
  
  if($sendingID === $data["email"] && $sendingPWD === $data["password"]){
    $response = [
      "statue" => 200,
      "data" => $data
    ];
  
    echo json_encode($response);

  }else{
      $response = [
      "statue" => 400,
      "message" => 'Mauvais identifiant ou mot de passe !',
    ];
  
    echo json_encode($response);
  }
}
?>