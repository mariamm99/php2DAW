
<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
$nombre= "María";
$apellidos = "Moreno Muñoz";
$edad= "21";
$img= "../img/fotopersonal.JPG";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Ejercicio básico 1</title>
	<meta charset="utf-8">
	<meta author="María Moreno Muñoz">

</head>
<body>
	<section>
<?php
echo "<h2>Ficha personal</h2>";
echo "<p> Mi nombre es ".$nombre." ".$apellidos." y tengo ".$edad." años</p>";

echo "Foto personal : <img src='".$img."' style= 'width: 10%';/>";

?>
</section>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosbasicos/ejer1.php"><input type="button" value="github" name="github"></a></p>


</body>
</html>