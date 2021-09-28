<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 3</title>
</head>
<body>

	<?php 
		$fecha = date("d-m-Y");
		$edad1  = rand(1,100);
		$edad2  = rand(1,100);
		$edad3  = rand(1,100);
		$pais1 = "Argentina";
		$pais2 = "Uruguay";
		$pais3 = "Chile";

		echo "hoy es ".$fecha;
		echo "<br>";
		echo "edades de " . $edad1 . ", " . $edad2 . " y " . $edad3 . " años";
		echo "<br>";
		echo $pais1 . " " . $pais2 . " y " . $pais3;


	 ?>

</body>
</html>