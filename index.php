<?php

    include'./page/connexion.php';

    
$yves = $bd->prepare('SELECT COUNT(*)FROM admin');
$yves->execute();

$nb= $yves->fetchColumn();

if($nb>0){
    echo "<script>
    let disp = Document.getElementById('inc')
    disp.Style.Display='none'
    </script>";
}
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <script src="./style/bootstrap.bundle.min.js" defer></script>

</head>

<body>
    <div class="container-fluid">
        <header>
            <p>Bienvenue à l'UFR/SDS</p>
            <img src="./images/logo-bf-removebg-preview.png" class="img-fluid m-0 col-md-1" alt="">
            <p>Mr. l'Adminitrateur</p>
        </header>
        <div class="debut">

            <img src="./images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-xs-3" style="width: 250px; height: 300px; margin-left: 35px;" alt="">
            <!-- <button>Inscription</button> -->
            <form method="get" action="./page/inscription.php" class="me-5">
                <button type="submit" id="inc">Inscription</button>
            </form>

            <form method="get" action="./page/authentification.php" class="ms-5">
                <button type="submit">Connexion</button>
            </form>
            <!-- <button>Connexion</button> -->
            <img src="./images/pharmacie-removebg-preview.png" class="img-fluid col-xs-3" alt=" " style="width: 300px; height: 300px; margin-right: 35px;">


        </div>
    </div>

    <footer>
        Copyright-UFR/SDS
    </footer>

    <?php


    ?>

</body>

</html>