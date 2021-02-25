<!--
	Ejercicio calendario con formulario
	@author María Moreno Muñoz
-->

<?

//$fechaDada=date("d-m-Y");




/**guardar variables con fechas festivas */
$festivo1 = "1-01";
$festivo2 ="6-01";
$festivo3 ="10-04";
$festivo4= "1-05";
$festivo5 ="15-08";
$festivo6 ="12-10";
$festivo7 ="8-12";
$festivo8 ="25-12";
$festivo9 ="6-12";

$aFestivosNacionales = array($festivo1, $festivo2, $festivo3, $festivo4, $festivo5, $festivo6, $festivo7, $festivo8, $festivo9);

/**Festivos Andalucia */
$festivo1 = "28-02";
$festivo2 ="1-11";
$festivo3 ="10-04";


// $aFestivosNacionales = array($festivo1, $festivo2, $festivo3, $festivo4, $festivo5);

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

        
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>

    <input type="date" name="fecha" value="fecha">
    <input type="submit" value="enviar" name="enviar">

    <form>



<?
if (isset($_POST["enviar"])) {
    echo $_POST["fecha"];
    $fechaDada=$_POST["fecha"];
    
/**saco dia, mes y año actual porque hago este mes */
$diaActual = date("d", strtotime($fechaDada)); 
$mesActual = date("F", strtotime($fechaDada));
$mesNumeroActual= date("m", strtotime($fechaDada));
$anioActual= date("Y", strtotime($fechaDada));
    //"2-12-2020";  
    ?>

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
//$month_start = date('first day of this month', $fechaDada);

$month_start = date('first day of this month', date($fechaDada));
$dia1= "1-".$mesNumeroActual."-".$anioActual;

$dia1 = date("w", strtotime($dia1));



/**dia ultimo numerico por si es mes 31, 30, 28... */
$month_end = strtotime('last day of this month', $fechaDada);
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
    foreach ($aFestivosNacionales as $value) {
        
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
echo "</table>";
}
    
    ?>




<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/formulario/calendario.php"><input type="button" value="github" name="github"></a></p>

</body>
</html>