<?
$aNiveles=array(1, 2, 3);
$aVbsMostrar=array(10,20,30);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verbos Irregulares</title>
</head>
<body>
    
    <form action="vbsIngles.php" method="post">
    <?
    
    
    
    echo "<p>Nivel de dificultad, el 1 es el mas dificil y 3 mas facil:</br> <select name=\"nivel\">";
foreach ($aNiveles as $value) {
    echo"<option>$value</option>";
}
echo "</select></p>";


echo "<p>Cuantos verbos quieres que aparezcan: </br><select name=\"vbsMostrar\">";
foreach ($aVbsMostrar as $value) {
    echo"<option>$value</option>";
}
echo "</select> </p>";
    
    
    ?>

    <input type="submit" value="enviar" name="enviar">
    
    <p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
    <a href="https://github.com/mariamm99/php2DAW/blob/main/ejerciciosIF/ejer1.php"><input type="button" value="github" name="github"></a></p>


    </form>

</body>
</html>