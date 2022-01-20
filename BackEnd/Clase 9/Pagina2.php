<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagina 2</title>
</head>
<body>

<?php
echo $_REQUEST['Nombre'];
echo "<br>";
if ($_REQUEST['Edad'] >= 18) {
echo "Es mayor de edad";
} else {
echo "No es mayor de edad";
}
?>


</body>
</html>