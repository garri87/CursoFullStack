<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 15</title>
</head>
<body>

<?php 

$mySQL = mysql_connect("localhost", "root", "", "tienda") or
 die("Problemas con la conexión");

mysqli_query($conexion, "select * from empleado")
 or die("Problemas " . mysqli_error($conexion));
 mysqli_close($conexion);
 




 ?>



</body>
</html>