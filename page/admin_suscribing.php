<?php
require_once './connexion.php'; //permet de connecter premierement a la base de donnée

$nom = $_POST['nom'];//$_POST variable globale ou super globale
$prenom = $_POST['prenom'];
$mdp = md5($_POST['password']);
$telephone = $_POST['tel'];
$email = $_POST['email'];

$yves = $bd->prepare('INSERT INTO admin (nom, prenom, telephone, email, mot_de_passe)
 VALUES(?, ?, ?, ?, ?)');


$yves->execute(array($nom, $prenom, $telephone, $email, $mdp));// ce ci est appeler une requette preparer et il est un tableau
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATION</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
</head>
<body>
 
<div class="container-fluid">
        <header>
            <p>Bienvenue à l'UFR/SDS</p>
            <img src="../images/logo-bf-removebg-preview.png" class="img-fluid m-0 col-md-1" alt="">
            <p>Mr. l'Adminitrateur</p>
        </header>
        <div class="debut">

            <img src="../images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-xs-3" style="width: 250px; height: 300px; margin-left: 25px;" alt="">
           
        <div class="col-md-8 mt-5">
          <div class="alert alert-success mt-5 " role="alert">
                <h4 class="alert-heading do text-center font-weight-bold">Administrateur enregistrer avec succés!</h4>
                        <hr>
              <p class="mb-0 text-center font-weight-bold"><a href="./authentification.php" class="list-unstyled text-light" style="margin-bottom: 250px;">Connexion</a></p>
           </div>
     </div>

            <img src="../images/pharmacie-removebg-preview.png" class="img-fluid col-xs-3" style="width: 250px; height: 300px; margin-right: 25px;" alt=" ">


        </div>
    </div>

    <footer>
        Copyright-UFR/SDS
    </footer>

</body>
</html>
