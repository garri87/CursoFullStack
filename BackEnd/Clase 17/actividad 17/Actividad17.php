<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 17</title>
</head>
<body>
<?php 

$conexion = mysqli_connect("localhost","root","","cursofullstack")or
die("Problemas con la conexión");

mysqli_query($conexion, "INSERT INTO docente (Nombre) VALUES ('Pablo')");

mysqli_query($conexion, "INSERT INTO docente (Nombre) VALUES ('Juan')");



$updateName = "UPDATE docente SET Nombre= 'Sicos' WHERE Nombre='Juan'";

if (mysqli_query($conexion,$updateName))
{
	echo 'El nombre se ha modificado correctamente';
}

echo '<br>';
mysqli_query($conexion, "DELETE FROM docente WHERE Nombre = 'Sicos'");

echo 'El nombre Sicos ha sido eliminado de la base de datos';

 ?>


</body>
</html>

