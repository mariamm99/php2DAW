<!--
	Ejercicio 1.4.1 JS dentro de html
	@author María Moreno Muñoz
-->


<?


//$fechaActual=date("d-m-Y");
$fechaActual="2-12-2020";

/**saco dia, mes y año actual porque hago este mes */
$diaActual = date("d", strtotime($fechaActual)); 
$mesActual = date("F", strtotime($fechaActual));
$mesNumeroActual= date("m", strtotime($fechaActual));
$anioActual= date("Y", strtotime($fechaActual));


/**guardar variables con fechas festivas */
$festivo1 = "1-01";
$festivo2 ="6-01";
$festivo3 ="10-04";
$festivo4= "1-05";
$festivo5 ="15-08";
$festivo6 ="12-10";
$festivo7 ="8-12";
$festivo8 ="25-12";

$array = array($festivo1, $festivo2, $festivo3, $fesetivo4, $festivo5, $festivo6, $festivo7, $festivo8);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="María Moreno">
    <title>Ejercicio 5</title>
</head>
<body>
<h1>Actividad 2</h1>
	<p>Autor: María Moreno Muñoz</p>

<table border="1">
<tr>
<td> L </td>
<td> M </td>
<td> X </td>
<td> J </td>
<td> V </td>
<td> S </td>
<td > D </td>
</tr>
<?


/**Obtengo la posición del primero y ultimo dia, si fue lunes 1, martes 2, miercoles 3.... */
//$month_start = date('first day of this month', $fechaActual);

$month_start = date('first day of this month', date($fechaActual));
$dia1= "1-".$mesNumeroActual."-".$anioActual;

$dia1 = date("w", strtotime($dia1));
echo $dia1;


/**dia ultimo numerico por si es mes 31, 30, 28... */
$month_end = strtotime('last day of this month', $fechaActual);
$diaUltimo= date('d', $month_end);




/**Titulo con mes */
echo "<h2>".$mesActual. "  ".$anioActual ."</h2>";

/**
 * Colocamos los dias en blanco primero si es $dia1==0 es domigno y ponemos 7.
 */
echo "<tr>";
if ($dia1 ==0 ) {
    $dia1=7;
}

for ($i=0; $i < $dia1-1; $i++) { 
    echo "<td></td>";
}
$semana = $dia1;

$diaFestivo=0;

for ($dia=1; $dia <=$diaUltimo ; $dia++) { 
    
    /**gurdamos el resto comun para saber cuando es domingo */
    if ( $i + $dia == 7) {
        $resto = $dia %7;
    }


    /**Paso el dia con el mes para compararlo con las fechas festivas */
    $fechaMesDia= "$dia-$mesNumeroActual";

    /**recorro array de festivos para compararlo */
    foreach ($array as $value) {
        
        //echo $value . "valor";
        //echo $fechaMesDia . "fecha </br>";
        if (strcmp($value, $fechaMesDia) === 0 ) {
            $diaFestivo= $dia;

        } 
        
    }

    /** Recorrer array con festivos */


    /**
     * si el resto es igual es domigno y coloreamos de rojo, si no dia normal
     */
    if ( $resto == $dia %7) {
        echo "<td bgcolor=red >$dia</td>";
        echo "</tr><tr>";
        
    }elseif($dia==$diaActual){
        echo "<td bgcolor=green >$dia</td>";

    }elseif ($dia==$diaFestivo) {
        echo "<td bgcolor=yellow >$dia</td>";
    } else{
            
        echo "<td>$dia</td>";
    }
    
    
}

echo "</tr>";


?>
</table>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/bucles/ejer5Calendario.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>