
<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
	$radio= 4;

	$PI = M_PI;

	$img = "../img/radio.svg";

?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta author="María Moreno Muñoz">
	<title>Ejercicio básico 2</title>
</head>
<body>
	<h1>Actividad 2</h1>
	<p>Autor: María Moreno Muñoz</p>

	<?php
	$area = $PI * 2 * $radio; 
	echo "<p>El radio es: ". $radio. "</p>";
	echo "<p>el area es ". $area. "</p>";

	echo "</b><img src=".$img.">";
	?>
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosbasicos/ejer2.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>