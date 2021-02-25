<!--
	Ejercicio 1.4.1 JS dentro de html
	@author María Moreno Muñoz
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta author="María Moreno Muñoz">
	<title></title>

</head>
<body>

		<h1>Actividad 1</h1>
	<p>Autor: María Moreno Muñoz</p>
<?php

for ($i=1; $i <= 10; $i++) { 
	echo $i;
	echo "</br>";
}

?>

<form action="#" method="post">
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/bucles/ejer1.php"><input type="button" value="github" name="github"></a></p>

</form>

</body>
