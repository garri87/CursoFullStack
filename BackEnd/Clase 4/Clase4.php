<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clase4</title>
</head>
<body>

	<?php 
$dia=date("d");
$fecha=date("d/m/Y");
	$nombre1 = "Pablo";
	$nombre2 = "Oliverio";
	$nombre3 = "Cecilia";
	$nombre4 = "Juan";
	$edad1 = 35;
	$edad2 = 3;
	$edad3 = 40;
	$edad4 = 75;
	$curso1 = "PHP";
	$curso2 = "JavaScript";
	$curso3 = "HTML";
	$horario1 = 11;
	$horario2 = 15;
	$horario3 = 18;
	$num1 = $num=rand(10,50);
	$num2 = $num=rand(10,50);
	$num3 = $num=rand(10,50);
	$num4 = $num=rand(10,50);

	echo $fecha;
	echo "<br>";
	echo $nombre1 . " : " . $edad1;
	echo "<br>";
	echo $nombre2 . " : " . $edad2;
	echo "<br>";
	echo $nombre3 . " : " . $edad3;
	echo "<br>";
	echo $nombre4 . " : " . $edad4;
	echo "<br>";
	echo "<br>";
	echo $curso1 . " : " . $horario1 . "hs";
	echo "<br>";
	echo $curso2 . " : " . $horario2 . "hs";
	echo "<br>";
	echo $curso3 . " : " . $horario3 . "hs";
	echo "<br>";
	echo "<br>";
	echo $num1;
	echo "<br>";
	echo $num2;
	echo "<br>";
	echo $num3;
	echo "<br>";
	echo $num4;
	 ?>






</body>
</html>