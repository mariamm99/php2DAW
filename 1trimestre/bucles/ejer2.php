<!--
	Ejercicio 1.4.1 JS dentro de html
	@author María Moreno Muñoz
-->

<?php
$suma = 0;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta author="María Moreno Muñoz">
	<title></title>

</head>
<body>

		<h1>Actividad 2</h1>
	<p>Autor: María Moreno Muñoz</p>
<?php

for ($i=2; $i < 7; $i+=2) { 
	$suma=$i+$suma;
}

echo "resultado ".$suma;
?>
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/bucles/ejer4.php"><input type="button" value="github" name="github"></a></p>

</body>
