<!DOCTYPE html>
<html>
<head>
<script src="changepics.js" type="text/javascript"></script>
<link href="modelPageDesign.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="heading">
  <h1>Car Models</h1>
</div>

<div class="subHeading">
  <h3> Please select a car model from the choices below: </h3>
</div>

<div class="row">
	<?php
		require_once "connectdb.php";

		$queryStatement = 'SELECT id,name,image FROM model';
		$query = $pdo->query($queryStatement);
		$results = $query->fetchAll();

		foreach($results as $result){

			echo '<div class="column">';
      echo '<form action="colourselect.php" method="post">';
			echo '<a href=colourselect.php?id='.$result['id'].'>';
      // echo '<input type="hidden" id="modelnum">'.$result['id'].'</input>';
			echo '<img src="' . $result['image'] . '" alt="' . $result['name'] . '" class = "image" onclick="assignVar('.$result['id'].')">';
			echo '<div class="overlay">';
			echo '<h4>' . $result['name'] . '</h4>';
			echo '</div>';
			echo '</a>';
      echo '</form>';
			echo '</div>';
		}
	?>

</body>
</html>
