<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<link rel="icon" type="jpeg" href="images.jpeg">
</head>
<style type="text/css">
	.left{float: left;width: 50%;
		height: 30px;text-align: left}
		.right{text-align: right;width: 50%;float: right;height: 30px}
		li{display: inline}
</style>
<body style="background-image: url(images.jpeg);">
<div class="navigation">
	<div class="left">
		<h1><spam style="color: blue">w</spam><spam style="color: black">e</spam><spam style="color: green">i</spam><spam style="color: orange">g</spam><spam style="color: blue">h</spam><spam style="color: red">t</spam></h1>

	</div>
	<div class="right">
		<ul style="list-style-type: none">
			<li><a href="#">about us </a></li>
			<li><a href="#">contact us</a></li>
			<li><a href="#">help</a></li>
		</ul>
	</div>
	
</div>
<div style="background-image: url(BMIChart.gif);">
<div style="position: absolute;left: 350px;top: 150px;background-color:|#131000;border: 2px solid red;padding: 20px;box-sizing: border-box;box-shadow: .6;background-color: red">
	<form method="GET">
		<h1 style="font-family: ani"><u>weight website complex</u></h1>
		<h1>height</h1>+
		<hr>
		<input type="number" name="height" placeholder="height"><br>
		<h1>weight</h1>
		<hr>
		<input type="number" name="weight" placeholder="weight"><br><br>
		<button>calculate bmi</button>
		<?php
		$height=$_GET{'height'};
		$weight=$_GET{'weight'};
		$height2=$height * $height ; 
		$bmi= $weight / $height2;
		echo "<br>";
		echo "your bmi is " .$bmi;		
		?>

	</form>
</div>
</div>
</body>
</html>