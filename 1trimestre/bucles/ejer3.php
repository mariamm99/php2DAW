<!--
	Ejercicio 1.4.1 JS dentro de html
	@author Mar? Moreno Mu?z
-->

<?php
$n=1;
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

<table border="1">
<?php
echo "<tr>";
for ($i=1; $i <=10 ; $i++) { 
	
	 echo " <td> ".$i." </td>";
	}
	echo "</tr>";

for ($i=1; $i <10 ; $i++) { 
	echo "<tr>";
	 for ($multiplo=1; $multiplo <= 10 ; $multiplo++) { 
	 	 echo " <td> ".$i*$multiplo." </td>";
	 }
	 echo "</tr>";
}

?>
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/bucles/ejer3.php"><input type="button" value="github" name="github"></a></p>

</table>
</body>
