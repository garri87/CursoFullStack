<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actividad 13</title>
</head>
<body>


<?php 		

$resultado = 0;
$textFile = fopen("Actividad13.txt", "a");

$numero1 = $_REQUEST['numero1'];
$numero2 = $_REQUEST['numero2'];
$numero3 = $_REQUEST['numero3'];
$operando = $_REQUEST['operacion'];


$calculo = Calcular($numero1,$numero2,$numero3,$operando);

echo "El resultado es: " . $calculo;	

fputs($textFile, "Los numeros ingresados fueron: " . $numero1 . ", ". $numero2 . " y " . $numero3);
fputs($textFile, "\n");
fputs($textFile, "El resultado de la " . $operando . " es: " . $calculo);



function Calcular($num1, $num2, $num3, $operacion)
{

switch ($operacion) {
	case 'suma':
		
		$resultado = $num1 + $num2 + $num3;
		break;
	
	case 'resta':
	
		$resultado = $num1 - $num2 - $num3;

		break;	

	case 'division':
	
		$resultado = $num1 / $num2 / $num3;

		break;	

	case 'multiplicación':
	
		$resultado = $num1 * $num2 * $num3;
		
		break;
	}

	return $resultado;		
}

 ?>

</body>
</html>