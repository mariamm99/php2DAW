<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
	$x= 10;
	$y= 7;
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta author="María Moreno Muñoz">
	<title>Ejercicio condicionales 1</title>
</head>
<body>
	<h1>Actividad 1</h1>
	<p>Autor: María Moreno Muñoz</p>

	<?php

		if ($x < $y) {
			echo $y;
		}else {
			echo $x;
		}
		
	?>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosIF/ejer1.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>