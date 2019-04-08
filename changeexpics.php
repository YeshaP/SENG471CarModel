<?php
require_once "connectdb.php";

$colour = $_POST['colour'];
$modelnum = $_POST['modelnum'];

$sql = "SELECT image FROM exterior WHERE color= '".$colour."' AND modelnum='".$modelnum."' LIMIT 1";
$query = $pdo->query($sql, PDO::FETCH_ORI_FIRST);
$results = $query->fetch();

echo $sql."<br>";
var_dump($results);
echo "<br>".$colour;

try{
  if($results){

    echo "<img src=".$results['image']." class='carpic' alt='exterior' id='eximage'/>";
  }
  else{

    echo $sql;
    var_dump($results);
    echo "<br>".$colour;

  }

}catch(PDOException $e){
  die("<br>Something went wrong:<br>".$e->getMessage());
}

?>
