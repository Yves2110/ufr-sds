<?php


require_once './connexion.php'; 
$tuteur = $_POST['tuteur'];
$numero_tuteur = $_POST['tut_phone'];

$yves = $bd->prepare('INSERT INTO tuteur_legal ( nom_et_prenom, telephone) VALUES(?, ?)');

$yves->execute(array($tuteur, $numero_tuteur));

// if(isset($_POST['tut_phone'])>0){
//     try{
//      <script>alert''</script>   
//     }
// }

header( 'location:enregistrement.php');
?>










<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDATION</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
 
<div class="container-fluid">
        <header>
            <p>Bienvenue à l'UFR/SDS</p>
            <img src="../images/logo-bf-removebg-preview.png" class="img-fluid m-0 col-md-1" alt="">
            <p>Mr. l'Adminitrateur</p>
        </header>
        <div class="debut">

            <img src="../images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-md-4" style="width: 250px; height: 300px; margin-left: 25px;" alt="">
           
        <div class="col-md-8 mt-5">
          <div class="alert alert-success mt-5 " role="alert">
                <h4 class="alert-heading do text-center font-weight-bold">Etudiant enregistrer avec succés!</h4>
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
</html> -->