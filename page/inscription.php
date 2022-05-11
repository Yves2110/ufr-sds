<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../style/inscription.css">
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
        <p class="text-center mb-5 text-success fs-2">Inscription</p>
        <div class=" d-flex justify-content-md-between">

            <img src="../images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-xs-3" style="width: 250px; height: 300px; margin-left: 35px;" alt="">

            <div class="col-md-4 bg-light justify-content-center text-center py-5 h-350px">

                <form action="admin_suscribing.php" method="post">
                    <div class="m-4">
                        <i class="fa-solid fa-clipboard-user"></i>
                        <input type="text" name="nom" id="" placeholder="Nom" required="">
                    </div>
                    <div class="m-4">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="prenom" id="" placeholder="Prénom" required="">
                    </div>
                    <div class="m-4">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        <input type="email" name="email" id="" placeholder="E-mail" required="">
                    </div>
                    <div class="m-4">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" name="tel" id="" placeholder="Téléphone" required="">
                    </div>

                    <div class="m-4">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Mot de passe" required="" onkeyup='check();'>
                    </div>
                    <div class="m-4">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirmer mot de passe" required="" onkeyup='check();'>
                        <span id='message'></span>
                    </div>
                    <div class=" m-4">


                        <i class="fa-solid fa-circle-plus"></i>
                        <input type="submit" value="Ajouter" style="color: #34f20e;; width: 100px; font-weight: bolder;">

                    </div>
                </form>
            </div>

            <img src="../images/pharmacie-removebg-preview.png" class="img-fluid col-xs-3" alt=" " style="width: 300px; height: 300px; margin-right: 35px;">


        </div>
    </div>

    <footer>
        Copyright-UFR/SDS
    </footer>

<?php



?>

<script>
    let check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>

</body>

</html>