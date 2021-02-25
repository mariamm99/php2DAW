<?
$aLetraNumero= [0=>"T", 1=>"R", 2=>"W", 3=>"A", 4=>"G",5=>"M", 6=>"Y", 7=>"F",
 8=>"P", 9=>"D", 10=>"X", 11=>"B", 12=>"N", 13=>"J", 14=>"Z", 15=>"S", 16=>"Q",
  17=>"V", 18=>"H", 19=>"L", 20=>"C", 21=>"K", 22=>"E"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ejercicio de DNI</h1>

    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="GET">
    <p>Introduzca el DNI sin letra</p>
    <input type="text" name="dni" id="dni">
    <p>Solo números</p>
    
    <input type="submit" value="enviar" name="enviar">
    </form>

    <?
if (isset($_GET["enviar"])) {

    if (!is_numeric($_GET["dni"])) {
    echo "solo debes pasar números ". $_GET["dni"] . " es incorrecto";
    }else{
        $dni=(int)$_GET["dni"];
        $division=$dni%23;
        echo ("la letra es: ". letra($aLetraNumero, $division));
    }
}

function letra($aLetraNumero, $division){
  foreach ($aLetraNumero as $numero => $letra ) {
        if ($numero == $division) {
            return $letra;
        }
    }
    return "dni no válido";
 }

?>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/dniIndex.php"><input type="button" name="github"></a></p>


</body>
</html>