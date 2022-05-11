<?php

require_once './connexion.php'; //permet de connecter premierement a la base de donnée

$email = $_POST['email'];
$mdp = md5($_POST['password']);

$stmt = $bd->prepare( 'SELECT * FROM admin WHERE email = ? and  mot_de_passe= ? ');
$stmt->execute(array($email,$mdp));
$user = $stmt->fetch();

if (!$user){
    header('location:./inscription.php?inv=3');
}
 else {
    header('location:./enregistrement.php');
}

?>
