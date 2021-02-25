<!--
	Ejercicio 1.4.1 JS dentro de html
	@author María Moreno Muñoz
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

$cr=0;
$cv=0;
$ca=0;
$incremento=17;

for ($cr=0; $cr < 256; $cr+=$incremento) { 
	
	for ($cv=0; $cv < 256; $cv+=$incremento) {
		echo "<tr>" ;
		
		for ($ca=0; $ca < 256 ; $ca+=$incremento) { 

			$R = dechex($cr);
       		if (strlen($R)<2)
       		$R = '0'.$R;

       		$G = dechex($cv);
       		if (strlen($G)<2)
       		$G = '0'.$G;

       		$B = dechex($ca);
       		if (strlen($B)<2)
       		$B = '0'.$B;

       		$color="#" . $R . $G . $B;
			echo" <td bgcolor='".$color."'> ".$color." </td>"; 
		}	
		echo "</tr>";
	}
	
}

?>
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/dniIndex.php"><input type="button" value="github" name="github"></a></p>

</table>
</body>
