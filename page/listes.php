<?php 
include("./connexion.php")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../style/inscription.css">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
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
        <p class="text-center mb-5 text-success fs-2">Listes</p>
        <div class="bg-light">
            <?php
            
            $bd = new PDO("mysql:host=localhost;dbname=appli-sds", "root", "");
            $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $result = $bd->query("SELECT * FROM listes ORDER BY nom ASC");
    
            if (!$result) {
              echo "la recuperation a echoue";
            } else {
              $nombre = $result->rowCount();
            ?>

                <h4 class="text-center text-uppercase text-success">Vous avez
                    <?= $nombre ?> de personnes enregistrées</h4>
                <table class="table text-success">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom(s)</th>
                        <th>Date de Naissance</th>
                        <th>E-mail</th>
                        <th>Téléphone</th>
                        <th>Tuteur legal</th>
                        <th>Numéro tuteur</th>
                        <th></th>
                    </tr>
                    <?php 
                while ($ligne = $result->fetch()){
                    
          echo "<tr>";
            echo "<td>" . $ligne["nom"] . "</td>";
            echo "<td>" . $ligne["prenom"] . "</td>";
            echo "<td>" . $ligne["naissance"] . "</td>";
            echo "<td>" . $ligne["email"] . "</td>";
            echo "<td>" . $ligne["telephone"] . "</td>";
            echo "<td>" . $ligne["tuteur"] . "</td>";
            echo "<td>" . $ligne["numero_tuteur"] . "</td>";
            echo  "<td><a href='./icon.php?id=".$ligne["email"]."' id='supp'> <i class='fa-solid fa-pen' style='color:#34f20e;'></i></i> </a><a href='./icon.php?id=".$ligne["email"]."' id='supp'> <i class='fa-solid fa-trash' style='color:#34f20e;'></i></i> </a>
          </td>";
            echo "</tr>";

                }
                ?>
                </table>
                <?php
        }
            ?>
        </div>
        <hr>
        <p class="mb-0 text-center font-weight-bold"><a href="./Enregistrement.php" class="list-unstyled text-light">RETOUR</a></p>
    </div>




    </div>
    </div>

    <footer>
        Copyright-UFR/SDS
    </footer>



</body>

</html>