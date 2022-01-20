<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 11</title>
</head>
<body>
	<html>
		<?php

			$costoHoraDocente = 300;
			$costoHoraAdm = 200;
			$puesto = $_REQUEST['puesto'];
			$horas = $_REQUEST['horas'];
			$salarioTotal = 0;

			if ($_REQUEST['puesto'] == "Administrativo") 
			{
			 $salarioTotal = $horas * $costoHoraAdm;
			}
			elseif ($_REQUEST['puesto'] == "Docente") 
			{
			 $salarioTotal = $horas * $costoHoraDocente;
			}


			echo "El nombre y apellido ingresado es: " . $_REQUEST['nombre'] . " " . $_REQUEST['apellido'];
			echo "<br>";
			echo "de genero: " . $_REQUEST['genero'];
			echo "<br>";
			echo "ha seleccionado el puesto: " . $puesto;			
			echo "<br>";
			echo "Su salario según sus horas trabajadas es de: $" . $salarioTotal;


			
		?>
</body>
</html>

