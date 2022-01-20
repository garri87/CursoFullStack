<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 6</title>
</head>
<body>

<?php 	

$edad = rand(0,50);

echo "La edad de la persona es: " . $edad;
echo "<br>";
if ($edad <= 11) 
{
	echo "La persona esta en su niñez";
}
else 
{
	if ($edad >= 12 && $edad<18) 
	{
		echo "La persona esta en su adolescencia";
	}
	else
	{
		echo "La persona esta en su adultez";
	}

}

 ?>

 
</body>
</html>