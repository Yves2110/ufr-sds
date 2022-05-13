
<?php
require_once('./connexion.php');
$email = $_GET["id"];


$yves = $bd->prepare("DELETE FROM etudiants WHERE email= ?");
 

$yves->execute(array($email));
header('location: ./listes.php');


?>

