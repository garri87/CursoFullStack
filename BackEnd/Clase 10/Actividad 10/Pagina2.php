<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 10</title>
</head>
<body>
	<html>
		<?php
			echo "El nombre y apellido ingresado es: " . $_REQUEST['nombre'] . " " . $_REQUEST['apellido'] . " de " . $_REQUEST['edad'] . " años.";
			echo "<br>";
			echo "de genero: " . $_REQUEST['genero'];
			echo "<br>";
			echo "con domicilio en: " . $_REQUEST['direccion'];			
			echo "<br>";
			echo "Su tipo de cuenta es: " . $_REQUEST['cuenta'];
			
		?>
</body>
</html>

