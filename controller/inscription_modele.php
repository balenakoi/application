<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta name="description" content="">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../viewcss/main.css">
  <link rel="stylesheet" href="css/normalize.css">

</head>
<body>

  <div class="nav">
      <div class="déconnexion"><a href = "deconnexion.php">Deconnexion</a></div>

  </div>


</body>
</html>
<?php

// Connection to the database
require('../model/db.php');
$pseudo = htmlspecialchars($_POST['pseudo']);
$password = htmlspecialchars($_POST['pass']);
$password2 = htmlspecialchars($_POST['pass2']);
$email = htmlspecialchars($_POST['mail']);
//  Retrieving the user and his hash pass
  if (!empty($_POST['pseudo']) AND !empty($_POST['pass']))
  {
      if ($password == $password2) {
            $create = $bdd->prepare("INSERT INTO account (pseudo, pass, mail) VALUES (:pseudo, :pass, :mail)");
            $create->execute(array(
              'pseudo' => $pseudo,
              'pass' => password_hash($password, PASSWORD_DEFAULT),
              'mail' => $email
            ));
            header('location: ../connexion_vue.php');
        } else {
            header('location: ../connexion_vue.php');
        }
  } else {
      header('Location:../connexion_vue.php');
}
    ?>
