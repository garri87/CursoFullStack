<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 7</title>
</head>
<body>

<?php 	



	for ($i=1; $i <= 6 ; $i++) 
	{
		$promedio = rand(1,10); 
		echo "la nota del alumno " . $i . " es: " . $promedio;
		echo "<br>";
		if ($promedio >=7) 
		{
			echo "el alumno " . $i . " esta aprobado";
			echo "<br>";
			echo "<br>";
		} 
		else 
		{
			echo "El alumno " . $i . " esta desaprobado";
			echo "<br>";
			echo "<br>";
		}
	}

	echo "<br>";
	echo "<br>";
	echo "TABLAS DE MULTIPLICAR";
	echo "<br>";
	echo "<br>";
	for ($i=0; $i <=10 ; $i++) { 
		echo "<br>";
		for ($j=0; $j <=10 ; $j++) { 
			echo $i . " x " . $j . " = " . ($i*$j);
			echo "<br>";
		}
	}



 ?>

 
</body>
</html>