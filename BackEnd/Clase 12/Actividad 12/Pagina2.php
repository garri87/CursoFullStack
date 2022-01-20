<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actividad 12</title>
</head>
<body>
	<html>
		<?php

		$textFile = fopen("textFile.txt", "a") or die("Problemas en la creacion");
		fputs($textFile, $_REQUEST['Nombre']);
		fputs($textFile, "\r\n");
		fputs($textFile, $_REQUEST['Apellido']);
		fputs($textFile, "\r\n");
		fputs($textFile, $_REQUEST['DNI']);
		fputs($textFile, "\r\n");
		fputs($textFile, $_REQUEST['Genero']);
		fputs($textFile, "\r\n");
		fputs($textFile, $_REQUEST['Profesion']);
		fputs($textFile, "\r\n");

			echo "los datos han sido almacenados";
			
		?>
</body>
</html>

