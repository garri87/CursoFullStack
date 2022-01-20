<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 18 2</title>
</head>
<body>

<?php
$usuario = $_REQUEST['nombreUsuario'];

$conexion = mysqli_connect("localhost","root","","curso fullstack")or
die("Problemas con la conexión");

$consulta = mysqli_query($conexion, "SELECT * FROM alumnos WHERE Usuario = '$usuario'");

if (mysqli_num_rows($consulta) == 0) 
{
		echo "No existe el usuario";
}
else 
{
	echo "Bienvenido " . $usuario . " ha ingresado correctamente";
	session_start();
	$_SESSION['usuario'] = $usuario;
	echo "<br>";
	echo "<a href='Actividad18 3.php'> Ir a la pagina de bienvenida </a>";
}

?>




</body>
</html>