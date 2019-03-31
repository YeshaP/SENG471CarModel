<?php
require_once "connectdb.php";
$sql = "SELECT * FROM exterior WHERE modelnum =".$_POST['modelnum'];

$query = $pdo->query($sql);
$results = $query->fetchAll();
try{
  if($results){
    foreach($results as $row){
      echo "<form method='post'>
                <div>
                  <button onclick='changePics()' style='background-color:".$row['color'].";' class='colour' id='colour'>
                  </button>
                </div>
            </form>";
      echo $row['color'];
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
