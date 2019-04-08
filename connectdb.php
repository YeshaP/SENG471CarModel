<?php

try{

  $host = "localhost";
  $db = "cadadb";
  $username = "root";
  $password = "mAyr0npakongpag*big";

  $pdo = new PDO("mysql:host=$host;dbname=$db", "$username", "$password");

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "Connected successfully from connectdb!<br>";
  $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));

}catch(PDOException $e){
  die("<br>ERROR: Could not connect. " . $e->getMessage());
}

?>
