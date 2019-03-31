<?php
require_once "connectdb.php";
$sql = "SELECT * FROM exterior WHERE modelnum =".$_POST['modelnum']." LIMIT 1";

$query = $pdo->query($sql, PDO::FETCH_ORI_FIRST);
$results = $query->fetch();
try{
  if($results){
    echo "<img src='".$results['image']."'class='carpic' alt='exterior'/>";
  }
// <img src="https://media.wired.com/photos/59bafdf204afdc5248726f5c/master/w_2400,c_limit/BMW-TA.jpg" class="carpic" alt="exterior">
}catch(PDOException $e){
  die("<br>Something went wrong:<br>".$e->getMessage());
}
?>
