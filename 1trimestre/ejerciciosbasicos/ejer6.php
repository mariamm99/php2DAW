
<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
	$x= "Harry";

?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta author="María Moreno Muñoz">
	<title>Ejercicio básico 7</title>
</head>
<body>
	<h1>Actividad 7</h1>
	<p>Autor: María Moreno Muñoz</p>

	<?php

echo "<p> ".gettype($x)."(".strlen ($x). ") \"".$x."\" </p>";
	
echo $x;

	?>
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a></p>
<p><a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosbasicos/ejer6.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>