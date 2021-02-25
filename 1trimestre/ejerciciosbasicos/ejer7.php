
<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
	$string= "Harry";
	$double= 453.32;
	$boolean = true;
	$int= 4 ;
	$null = null;
	

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

echo "<p> Valor es ".gettype($string)."</p>";
echo "<p> Valor es ".gettype($double)."</p>";
echo "<p> Valor es ".gettype($boolean)."</p>";
echo "<p> Valor es ".gettype($int)."</p>";
echo "<p> Valor es ".gettype($null)."</p>";

	?>


<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosbasicos/ejer7.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>