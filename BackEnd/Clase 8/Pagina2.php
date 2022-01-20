<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php

$nombre = $_POST['nombre'];
$genero = $_POST['genero'];
$nacionalidad = $_POST['nacionalidad'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];




echo "tu nombre es : ";
echo $nombre;
echo "<br>";
echo "Genero: " . $genero;
echo "<br>";
echo "Nacionalidad: ";
echo $nacionalidad;
echo "<br>";
echo "los numeros son:";
echo "<br>";
echo $num1 . " " . $num2 . " " . $num3 . " " . $num4;
?>


</body>
</html>