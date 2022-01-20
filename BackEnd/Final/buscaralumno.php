<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buscar alumno</title>
</head>
<body>

<?php

$conexion = mysqli_connect("localhost","root","","finalbackend");

$nombre = $_REQUEST['Nombre'];

$apellido = $_REQUEST['Apellido'];

if (is_null($nombre) == true && is_null($apellido) == true) 
{

echo 'Por favor ingrese nombre o apellido para consultar';

}

if (is_null($nombre) == false) 
{
	if (is_null($apellido) == false) {
		
	}
}

$consultaNombre = mysqli_query($conexion,"SELECT Nombre from alumnos WHERE Nombre = '$nombre'");
$consultaApellido = mysqli_query($conexion,"SELECT Apellido from alumnos WHERE Apellido = '$apellido'");



while ($resultadoNombre = mysqli_fetch_array($consultaNombre)) 
{
 	while ($resultadoApellido = mysqli_fetch_array($consultaApellido))
	{

		echo 'Los datos del alumno son: ';
		echo '<br>';
		echo $resultadoNombre . " " . $resultadoApellido;

	}

}
 ?>


</body>
</html>