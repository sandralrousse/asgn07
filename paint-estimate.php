<!DOCTYPE html>
<!--	Author: Sandra Rousse
		Date:	October 26, 2020 
		File:	paint-estimate.php
		Purpose: OOP Exercise
-->

<html>
<head>
	<title>OOP Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>

<body>
	<h1>Paint Estimate</h1>
<?php

	include("inc-rectangle-object.php");

	$length = $_POST['length'];
	$width = $_POST['width'];
	$height = $_POST['height'];

	$longWall = new Rectangle();
	$shortWall = new Rectangle();

	$longWall->setX($height);//90
	$longWall->setY($length);//180
	$shortWall->setX($height);//90
	$shortWall->setY($width);//120

	$totalArea = (2 * $longWall->getArea() ) + (2 * $shortWall->getArea() );

	print("The total area is $totalArea square feet.");
?>
</body>
</html>