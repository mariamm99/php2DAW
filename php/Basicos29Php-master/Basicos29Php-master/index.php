<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

include "./class/pila.php";
include "./class/carta.php";

$suma = 0;

if (!isset($_SESSION["elementos"])){
    $_SESSION["elementos"]=array();
}

if (isset($_POST["enviarPila"])){
    if (isset($_POST["elemento"]) && ($_POST["elemento"] != "")){
        $pila = new Pila($_SESSION["elementos"]);
        $pila -> push($_POST["elemento"]);
        $_SESSION["elementos"] = $pila -> getElementos();
    }
}

if (isset($_POST["eliminarPila"])){
    $pila = new Pila($_SESSION["elementos"]);
    $pila -> popOut();
    $_SESSION["elementos"] = $pila -> getElementos();
}

if (isset($_POST["enviar"])){
    if (isset($_POST["numero"]) && ($_POST["numero"] != "")){   
        $numeros = str_split(strval($_POST["numero"]));
        foreach ($numeros as $key => $numero) {
           $suma += $numero;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios básicos Rafael Urbano Estepa</title>
</head>
<body>
    <h1>Ejercicios básicos semana 29/4 Rafael Urbano Estepa</h1>
<fieldset>
    <h2>Suma los dígitos de número</h2>
    <form action="index.php" method="post">
        El número: <input type="text" name="numero"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($suma) && $suma != 0){
        echo "<br>";
        echo "La suma de los dígitos del número dado es: ".$suma;
    }
    ?>
</fieldset>

<fieldset>
    <h2>Pila</h2>
    <form action="index.php" method="post">
        Añadir a la pila: <input type="text" name="elemento"><br><br>
        <input type="submit" name="enviarPila" value="Añadir">
        <input type="submit" name="eliminarPila" value="Eliminar Último">
    </form>
    <?php
if (isset($pila)){
        echo $pila -> devuelveInverso();
}
    ?>
</fieldset>

<fieldset>
    <h2>Creación de cartas personalizadas</h2>
    <?php
    $carta = new Carta();
    $carta -> escribeCartas();

    $cartas = $carta -> getCartas();
    foreach ($cartas as $key => $datos) {
        echo "<br><a href=\"./archivos/carta".$datos[0].".txt\" download=\"./archivos/carta".$datos[0].".txt\">Descargar Carta de ".$datos[0]."</a>";
    }

    ?>
</fieldset>
<a href='cierraSesiones.php'>Cerrar Sesión</a><br>
<a href="https://github.com/RafaelUrbanoEstepa/Ejercicios-Basicos-22-del-4">Enlace a GitHub para ver el código</a>
</body>
</html>