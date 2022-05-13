<?php
include("./connexion.php");



try {
    $bd = new PDO("mysql:host=localhost;dbname=appli-sds","root", "" );
    // set the PDO error mode to exception
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE etudiants SET   WHERE email= ?";
  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>