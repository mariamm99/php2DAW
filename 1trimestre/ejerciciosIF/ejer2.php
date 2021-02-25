<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
	$anio = date("y");
	$mes = date("m");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta author="María Moreno Muñoz">
	<title>Ejercicio condicionales 1</title>
</head>
<body>
	<h1>Actividad 2</h1>
	<p>Autor: María Moreno Muñoz</p>



<?php
				
	echo "<p> el mes es: ". $mes. "</p>" ;
				
	if ($mes     == 02) {
		if (($anio%4 == 0 && $anio%100 != 0) ||  $anio%400 == 0) {
			echo "es bisiesto 29 dias";
		} else {
			echo "no es bisiesto 28 dias";
		}
	
	} else {
				
		if ($mes     == 1 || $mes == 3|| $mes == 5|| $mes == 7|| $mes == 8|| $mes == 10|| $mes == 12) {
			echo "Tiene 31 dias";
		} else {
			echo "Tiene 30 dias";
		}
	}
?>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosIF/ejer2.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>