<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="GET">
    <p>Introduzca el numero que desea factorizar:</p>
    <input type="text" name="numero" id="numero">
    
    <input type="submit" value="enviar" name="enviar">
    </form>


</body>
</html>
   <?

if (isset($_GET["enviar"])) {
    echo "<table>";
    
    $numero=(int)$_GET["numero"];

    echo (factorizar($numero));
    echo " </table>";

}
      ?>

<form action="#" method="post">
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a></p>
<p><a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/factorial.php"><input type="button" name="github"></a></p>
</form>
</body>
</html>



<?

function factorizar($numero){
    $factor =2;
   
    while ($numero >= $factor) {
        
        if ($numero % $factor == 0) {
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>$factor</td>";
            echo "</tr>";
            $numero= $numero/$factor;
            $factor=1;
        }
        $factor++;
    }
}
?>