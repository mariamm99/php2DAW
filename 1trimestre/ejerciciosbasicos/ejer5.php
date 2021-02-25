
<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
$x= 8;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta author="María Moreno Muñoz">
	<title>Ejercicio básico 5</title>
</head>
<body>
	<h1>Actividad 5</h1>
	<p>Autor: María Moreno Muñoz</p>

	<?php

	echo "<p>Valor actual ".$x ."</p>";
	$x= $x +2;
	echo "<p>Suma 2. Valor ahora ".$x ."</p>";

	$x= $x -4 ;
	echo "<p>Resta 4. Valor ahora ".$x ."</p>";

	$x= $x *5;
	echo "<p>Multiplica por 5. Valor ahora ".$x ."</p>";

	$x= $x /3;
	echo "<p>Divide por 3. Valor ahora ".$x ."</p>";

	$x= $x +1;
	echo "<p>Incrememnta 1. Valor ahora ".$x ."</p>";

	$x= $x -1 ;
	echo "<p>Decrementa en 1. Valor ahora ".$x ."</p>";


	?>
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosbasicos/ejer5.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>