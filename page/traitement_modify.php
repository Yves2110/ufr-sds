<?php
include("./connexion.php");


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$naissance = $_POST['date_de_naissance'];
$telephone = $_POST['telephone'];
$numero_tuteur = $_POST['tut_telephone'];
$email = $_POST['email'];


try {
    $bd = new PDO("mysql:host=localhost;dbname=appli-sds","root", "" );
    // set the PDO error mode to exception
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE etudiants
    SET email =?,tut_telephone = ?,nom = ?, prenom = ?,date_de_naissance = ?,telephone = ?
    WHERE email= ?";


    // Prepare statement
    $stmt = $bd->prepare($sql);
  
    // execute the query
    $stmt->execute(
        array($email,$numero_tuteur,$nom,$prenom,$naissance,$telephone,$_GET['mod'])
    );
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . "<center><h1 style='color:green;background-color:lightgreen;'> Modification effectué avec succès</h1><a href='./listes.php'>Retour</a> </center>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $bd = null;
  ?>