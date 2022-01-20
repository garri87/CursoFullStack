<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad</title>
</head>
<body>

<?php

$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$curso = $_POST['Curso'];


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$num4 = $_POST['num4'];




echo "Hola " . $nombre . " " . $apellido;
echo "<br>";
echo "Estas inscripto en el curso: " . $curso;
echo "<br>";
echo "<br>";

echo "los numeros ingresados son:";
echo "<br>";
echo $num1 . " " . $num2 . " " . $num3 . " " . $num4;
?>


</body>
</html>