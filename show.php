<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Show Image in PHP - Campuslife</title>
	<style>
	body{background-color: #f2f2f2; color: #333;}
	.main{box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; margin-top: 10px;}
	h3{background-color: #4294D1; color: #f7f7f7; padding: 15px; border-radius: 4px; box-shadow: 0 1px 6px rgba(57,73,76,0.35);}
	.img-box{margin-top: 20px;}
	.img-block{float: left; margin-right: 5px; text-align: center;}
	p{margin-top: 0;}
	img{width: 375px; min-height: 250px; margin-bottom: 10px; box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important; border:6px solid #f7f7f7;}
	</style>
</head>
<body>
	<div class="container main">
		<h3>Car Models</h3>
		<div class="img-box">

		</div>
	</div>
</body>
</html>

<?php
include "connection.php";
$conn = new PDO("mysql:host=$host;port=3306;dbname=$db_name","$uname","$pwd");

$queryStatement = 'SELECT name,image FROM model';
$query = $conn->query($queryStatement);
$results = $query->fetchAll();

// while($rows = $results){
// 	$img_name = $rows['name'];
// 	$img_src = $rows['image'];
// }

foreach($results as $result){
	$img_name = $result['name'];
	$img_src = $result['image'];
}
?>
<div class="img-block">

		<img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_src; ?>" class="img-responsive" />
		<p><strong><?php echo $img_name; ?></strong></p>

</div>
<?php

?>
