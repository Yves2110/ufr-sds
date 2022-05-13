<!-- <?php
      include("./connexion.php")

      ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enregistrement</title>
  <link rel="stylesheet" href="../style/inscription.css">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
  .dropbtn {
    background-color: #e9f1fe;
    font-size: 15px !important;
    border: none;
    cursor: pointer;
    color: #34f20e;
    height: 40px;
    width: 110px;
    border-radius: 5px !important;
    border: red solid 0.5px;
  }

  .dropbtn:hover,
  .dropbtn:focus {
    background-color: #3e8e41;
  }

  #myInput {
    box-sizing: border-box;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
  }

  #myInput:focus {
    outline: 3px solid #ddd;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown a:hover {
    background-color: #ddd;
  }

  .show {
    display: block;
  }
</style>


<body>
<?php
$id= $_GET['id'];



$result = $bd->query("SELECT * FROM etudiants WHERE email='$id'");

if (!$result) {
  echo "la recuperation a echoue";
} else {
  $nombre = $result->rowCount();
$ligne = $result->fetch();


$nom= $ligne["nom"];
$prenom=  $ligne["prenom"];
$date_de_naissance=  $ligne["date_de_naissance"];
$tut_telephone=  $ligne["tut_telephone"];
$telephone=  $ligne["telephone"];
$email=  $ligne["email"];
}

?>
  <!-- <?php

  $bd = new PDO("mysql:host=localhost;dbname=appli-sds", "root", "");
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $result = $bd->query("SELECT * FROM tuteur_legal ORDER BY nom_et_prenom ASC");
  // var_dump($result->fetch());
  ?> -->

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
    <p class="text-center mb-5 text-success fs-2">Enregistrement</p>
    <div class=" d-flex justify-content-md-between">

      <img src="../images/Logo_Université_de_Ouagadougou-removebg-preview.png" class="img-fluid col-md-3" style="width: 250px; height: 300px; margin-left: 35px;" alt="">

      <div class="col-md-4 bg-light justify-content-center text-center mb-5 py-5 h-350px">
        <form action="tut_traitement.php" method="post">
          <div class="m-4">
            <i class="fa-solid fa-person-breastfeeding"></i>
            <input type="text" name="tuteur" id="" placeholder="Tuteur legal" required="">
          </div>
          <div class="m-4">
            <i class="fa-solid fa-phone-volume"></i>
            <input type="tel" name="tut_phone" id="" placeholder="Numéro du Tuteur" required="">
          </div>
          <div class=" m-4">
            <i class="fa-solid fa-circle-plus"></i>
            <input type="submit" value="Ajouter" style="color: #34f20e;; width: 100px; font-weight: bolder;">
          </div>
        </form>
        <div class="m-4">
          <form action="traitement_modify.php" method="post">

            <select name="tut_telephone" id="">
              <option value=""><?php echo $tut_telephone;?></option>
              <?php
              while ($ligne = $result->fetch()) {
                echo "<option value = '$ligne[telephone]'>$ligne[nom_et_prenom]</option>";
              }
              ?>
            </select>

        </div>
        <div class="m-4">
          <i class="fa-solid fa-clipboard-user"></i>
          <input type="text" name="nom" id="" placeholder="Nom" required="" value="<?php echo $nom;?>">
        </div>
        <div class="m-4">
          <i class="fa-solid fa-user"></i>
          <input type="text" name="prenom" id="" placeholder="Prénom" required="" value="<?php echo $prenom;?>">
        </div>
        <div class="m-4">
          <i class="fa-solid fa-envelope-open-text"></i>
          <input type="email" name="email" id="" placeholder="E-mail" required=""value="<?php echo $email;?>">
        </div>
        <div class="m-4">
          <i class="fa-solid fa-phone"></i>
          <input type="tel" name="telephone" id="" placeholder="Téléphone" required=""value="<?php echo $telephone;?>">
        </div>

        <div class="m-4">
          <i class="fa-solid fa-cake-candles"></i>
          <input type="datetime"  name="date_de_naissance" id="" placeholder="ex:2000-12-21" required="" value="<?php echo $date_de_naissance;?>">
        </div>


        <div class=" m-4">
          <i class="fa-solid fa-circle-plus"></i>
          <input type="submit" name="modify" value="Ajouter" style="color: #34f20e;; width: 100px; font-weight: bolder;">
        </div>
        </form>
      </div>

      <img src="../images/pharmacie-removebg-preview.png" class="img-fluid col-md-3" alt=" " style="width: 300px; height: 300px; margin-right: 35px;">


    </div>
  </div>

  <footer>
    Copyright-UFR/SDS
  </footer>


</body>

</html>