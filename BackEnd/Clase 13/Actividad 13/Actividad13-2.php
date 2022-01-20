<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 13-2</title>
</head>
<body>

<?php 
$textFile = fopen("Actividad13-2.txt", "a");

$horas = $_REQUEST['horas'];
$costoHoras = $_REQUEST['costoHoras'];
$total = CalcularSueldo($horas,$costoHoras);

echo "El sueldo total es: " . $total;

fputs($textFile, "El sueldo total es: " . $total);


function CalcularSueldo($hora,$costo)
{

$resultado = $hora * $costo;

return $resultado;
}


 ?>

</body>
</html>