<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 16</title>
</head>
<body>

<?php

$conexion = mysqli_connect("localhost","root","","curso fullstack")or
die("Problemas con la conexión");

$registro = mysqli_query($conexion, "SELECT NombreCurso
from cursos where NombreCurso= 'php'")or
die("Problemas en el select:" . mysqli_error($conexion));

echo "Curso en la base de datos: ". "<br>";
echo "<br>";
if ($reg = mysqli_fetch_array($registro))
{
echo $reg['NombreCurso'] . "<br>";
}
else {
	echo "no existe ese curso";
}

mysqli_close($conexion);	


 ?>


</body>
</html>