<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="modelPageDesign.css">
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
		include "connection.php";

		$queryStatement = 'SELECT id,name,image FROM model';
		$query = $conn->query($queryStatement);
		$results = $query->fetchAll();

		foreach($results as $result){
			echo '<div class="column">';
			echo '<a href=colourselect.php?id=' . $result['id'] . '>';
			echo '<img src="' . $result['image'] . '" alt="' . $result['name'] . '" class = "image">';
			echo '<div class="overlay">';
			echo '<h4>' . $result['name'] . '</h4>';
			echo '</div>';
			echo '</a>';
			echo '</div>';
		}
	?>

</body>
</html>
