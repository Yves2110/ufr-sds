<?php 
include("./connexion.php")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="../style/authentification.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>


    <div class="container-fluid">
        <header>

            <img src="../images/logo-bf-removebg-preview.png" class="img-fluid m-0 col-md-1" alt="">
            <a href="../index.php" class=" text-decoration-none text-success fs-4">accueil</a>
        </header>
        <div class=" d-flex justify-content-md-between">

            <img src="../images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-md-3" style="width: 250px; height: 300px; margin-left: 35px;" alt="">

            <div class="col-md-4 bg justify-content-center text-center py-5 h-350px">
                 <?php
                    if (isset($_GET['inv']))
                                             {
                    echo '<div class="alert bg-danger "> Mot de passe ou Email INVALIDE</div>';
                                 }
                ?>
                <form action="admin_check.php" method="post">
                    <div class="m-4">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <input type="email" name="email" id="" placeholder="E-mail" required="">
                    </div>
                    <div class="m-4">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="" placeholder="mot de passe" required="">
                    </div>
                    <div class=" m-4">
                        <input type="submit" value="Se connecter" style="color: #34f20e;; width: 100px; font-weight: bolder;">

                    </div>
                </form>
            </div>

            <img src="../images/pharmacie-removebg-preview.png" class="img-fluid col-md-3" alt=" ">


        </div>
    </div>

    <footer>
        Copyright-UFR/SDS
    </footer>



</body>

</html>