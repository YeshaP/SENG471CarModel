<?php
require_once "connectdb.php";
$id = $_GET[id];
$sql = "SELECT * FROM exterior WHERE modelnum ='".$id."'";

$query = $pdo->query($sql);
$results = $query->fetchAll();
$i = 0;
try{
  if($results){
    foreach($results as $row){
      echo "<form method='post'>
                <div>
                  <button onclick='changePics(".$i.")' style='background-color:".$row['color'].";' class='colour' id='".$i."'>

                  </button>
                </div>
            </form>";
      $i += 1;
    }
  }
  else{
    echo "<br>couldn't show anything<br>";
  }
// <img src="https://media.wired.com/photos/59bafdf204afdc5248726f5c/master/w_2400,c_limit/BMW-TA.jpg" class="carpic" alt="exterior">
}catch(PDOException $e){
  die("<br>Something went wrong:<br>".$e->getMessage());
}
?>
