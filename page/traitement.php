<?php


require_once './connexion.php'; 

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$naissance = $_POST['date_de_naissance'];
$telephone = $_POST['telephone'];
$numero_tuteur = $_POST['tut_telephone'];
$email = $_POST['email'];

$yves = $bd->prepare('INSERT INTO etudiants ( email, tut_telephone, nom, prenom, date_de_naissance, telephone) VALUES(?, ?, ?, ?, ?, ?)');


$yves->execute(array($email,$numero_tuteur,$nom,$prenom, $naissance, $telephone ));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATION</title>
    <link rel="stylesheet" href="../style/inscription.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
</head>
<body>
 
<div class="container-fluid">
<header>
            <img src="../images/logo-bf-removebg-preview.png" class="img-fluid m-0  col-md-1" alt="">
            <div class="menu ms-5 fs-5">
                <ul class="nav justify-content-end mt-4">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./enregistrement.php">enregistrement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./listes.php">listes</a>
                    </li>
                </ul>
            </div>

        </header>
        <div class="debut">

            <img src="../images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-md-4" style="width: 250px; height: 300px; margin-left: 25px;" alt="">
           
        <div class="col-md-8 mt-5">
          <div class="alert alert-success mt-5 " role="alert">
                <h4 class="alert-heading do text-center font-weight-bold text-success fs-4">Etudiant enregistrer avec succés!</h4>
                        <hr>
              <p class="mb-0 text-center font-weight-bold"><a href="./Enregistrement.php" class="list-unstyled text-light" style="margin-bottom: 250px;"> RETOUR</a></p>
           </div>
     </div>

            <img src="../images/pharmacie-removebg-preview.png" class="img-fluid col-md-4" style="width: 250px; height: 300px; margin-right: 25px;" alt=" ">


        </div>
    </div>

    <footer>
        Copyright-UFR/SDS
    </footer>

</body>
</html>