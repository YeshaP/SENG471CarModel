<?php
require_once "connectdb.php";

$colour = $_POST['colour'];
$modelnum = $_POST['modelnum'];

$sql = "SELECT image FROM interior WHERE color= '".$colour."' AND modelnum='".$modelnum."' LIMIT 1";
$query = $pdo->query($sql, PDO::FETCH_ORI_FIRST);
$results = $query->fetch();

try{
  if($results){

    echo "<img src=".$results['image']." class='carpic' alt='interior' id='inimage'/>";
  }
  else{

    echo $sql."<br>";
    var_dump($results);
    echo "<br>".$colour;

  }

}catch(PDOException $e){
  die("<br>Something went wrong:<br>".$e->getMessage());
}

?>
