<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
$fecha = date("d-m-Y");
$anio = date("Y");
$mes= date("m");
$dia = date("d");

$anioNaz = 1999;
$mesNaz= 1;
$diaNaz=6;


?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta author="María Moreno Muñoz">
	<title>Ejercicio condicionales 3</title>
</head>
<body>
	<h1>Actividad 3</h1>
	<p>Autor: María Moreno Muñoz</p>



	<?php

echo "<p> Fecha actual: ". $fecha. "</p> ";
 
 $edad= $anio - $anioNaz;

if ( $mes<$mesNaz) {
	$edad=$edad-1;
} elseif($mes==$mesNaz) {
	if ($dia<$diaNaz) {
		$edad=$edad-1;
	}
	
}

echo "la edad es: ". $edad;
?>


<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosIF/ejer3.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>