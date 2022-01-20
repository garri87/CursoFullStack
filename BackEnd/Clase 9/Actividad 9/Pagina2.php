<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 9</title>
</head>
<body>

<?php

$not1 = $_REQUEST['Nota1'];
$not2 = $_REQUEST['Nota2'];
$not3 = $_REQUEST['Nota3'];


$promedio = ($not1 + $not2 + $not3) / 3;

echo "El promedio es: " . $promedio;

echo "<br>";

if ($promedio > 7) 
{
echo "El alumno esta aprobado ";	
}
else
{
echo "El alumno está desaprobado";	
}

?>


</body>
</html>