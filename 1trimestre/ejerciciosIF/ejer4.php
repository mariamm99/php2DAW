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

  $dia = date('z'); // Por ejemplo: "80" (empieza por 0)
 
    // Si la fecha actual es anterior al 21 de marzo
    if ( $dia < 79 ) {
        $estacion = 'invierno';
 
    // Si la fecha actual es anterior al 22 de junio
    } elseif ( $dia < 172 ) {
        $estacion = 'primavera';
 
    // Si la fecha actual es anterior al 22 de septiembre
    } elseif ( $dia < 264 ) {
        $estacion = 'verano';
 
    // Si la fecha actual es anterior al 19 de diciembre
    } elseif ( $dia < 352 ) {
        $estacion = 'otono';
 
    // Si no es ninguna de las anteriores
    } else {
        $estacion = 'invierno';
 
    }

     // $estacion = 'primavera';
    
		echo " <img src='../img/".$estacion.".jpg' style= 'width: 30%';/>"; 
		
	?>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosIF/ejer4.php"><input type="button"  value="github" name="github"></a></p>

</body>
</html>