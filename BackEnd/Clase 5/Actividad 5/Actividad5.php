<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 5</title>
</head>
<body>

<?php 	

$num = rand(0,100);


function Checkpar($num)
{
	if ($num % 2 == 0) 
	{
		return " es par";
	}
	else
	{
		return " es impar";
	}
}
echo "el numero " . $num . Checkpar($num);

 ?>

 
</body>
</html>