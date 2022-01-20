<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 18 3</title>
</head>
<body>
<?php 

session_start();
$usuario = $_SESSION['usuario'];
echo "<h3> Bienvenido " . $usuario . "</h3>";
echo "<br>";
echo "<img src='sicos.png' alt='logo sicos'>";

 ?>
</body>
</html>