<?php
require_once "connectdb.php";

$eximage = $_POST['eximage'];
$modelnum = $_POST['modelnum'];

$sql = "INSERT INTO selection (customerid, modelnum, exterior) VALUES(0, '".$modelnum."', '".$eximage."')";
$query = $pdo->query($sql, PDO::FETCH_ORI_FIRST);
$results = $query->fetch();

try{
  if($results){

    echo "<br>Your selection has been saved!<br>";
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
