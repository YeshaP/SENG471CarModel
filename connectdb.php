<?php

try{

  $host = "localhost";
  $db = "cadadb";
  $username = "root";
  $password = "yesha1998";

  $pdo = new PDO("mysql:host=$host;dbname=$db", "$username", "$password");

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "Connected successfully!<br>";
  $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));

}catch(PDOException $e){
  die("<br>ERROR: Could not connect. " . $e->getMessage());
}

?>
