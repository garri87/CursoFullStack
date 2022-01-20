<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ingresar alumno</title>
</head>
<body>

<?php 

$conexion = mysqli_connect("localhost","root","","finalbackend")or die("Problemas con la conexion");

$nombre = $_REQUEST['Nombre'];
$apellido = $_REQUEST['Apellido'];
$telefono = $_REQUEST['Telefono'];

if (mysqli_query($conexion, "INSERT INTO alumnos (Nombre, Apellido, Telefono) VALUES ('$nombre','$apellido','$telefono')")) 
{
echo 'el alumno '. $nombre . ' ' . $apellido . ' ha sido ingresado a la base de datos';
}else 
{
echo 'error en el ingreso';	
}

?>
<br>
<a href="FinalPagina1.php">Volver a la pagina principal</a>
</body>
</html>