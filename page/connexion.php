<?php

$dsn ="mysql:host=localhost;dbname=appli-sds";

try{
$bd = new PDO($dsn, "root", "");
}
catch(PDOException $non){
    die("Erreur:" .$non -> getMessage());
}

?>