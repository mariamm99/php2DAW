<?php
/**
Autor María Moreno Muñoz
Fecha: 25/09/2020

*/
$usuario1= "admin";
$usuario2= "usuario";


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

    if ($usuario = "admin") {
       echo "enlaces de administrador";
    } else {
        echo "usuario";
    }
    
		
	?>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosIF/ejer5.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>