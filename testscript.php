<?php
require_once "connectdb.php";

$colour = $_POST['colour'];

$sql = "SELECT image FROM exterior WHERE color= '".$colour."' LIMIT 1";
$query = $pdo->query($sql, PDO::FETCH_ORI_FIRST);
$results = $query->fetch();
try{
  if($results){
    var_dump($colour);
    echo "<br>";
    var_dump($_POST['name']);
    echo "<br>".$sql;

    echo "<img src=".$results['image']." class='carpic' alt='exterior'/>";
  }
  else{

    var_dump($results);
    echo "<br>".$colour;

  }

}catch(PDOException $e){
  die("<br>Something went wrong:<br>".$e->getMessage());
}

?>
