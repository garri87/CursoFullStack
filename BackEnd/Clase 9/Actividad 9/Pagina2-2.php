<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 9</title>
</head>
<body>

<?php

$nombre = $_REQUEST['Nombre'];
$apellido = $_REQUEST['Apellido'];
$edad = $_REQUEST['Edad'];



echo "Hola " . $nombre . " " . $apellido;

echo "<br>";
if ($edad >= 18) 
{
echo "Tienes edad para comprar licor";	
}
else
{
echo "No puedes comprar licor";	
}

?>


</body>
</html>