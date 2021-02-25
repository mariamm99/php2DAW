<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

include "./class/cola.php";

$suma = 0;
$vector=array();

if (!isset($_SESSION["elementos"])){
    $_SESSION["elementos"]=array();
}

if (isset($_POST["enviarCola"])){
    if (isset($_POST["elemento"]) && ($_POST["elemento"] != "")){
        $cola = new Cola($_SESSION["elementos"]);
        $cola -> push($_POST["elemento"]);
        $_SESSION["elementos"] = $cola -> getElementos();
    }
}

if (isset($_POST["eliminarCola"])){
    $cola = new Cola($_SESSION["elementos"]);
    $cola -> popOut();
    $_SESSION["elementos"] = $cola -> getElementos();
}

function recursiva($indice,$vector){
    if ($indice == 0 ){
         return 0;
    }else{
        return recursiva($indice-1,$vector) + ($vector[$indice-1]);
    }
    
    
}

if (isset($_POST["enviar"])){
    if (isset($_POST["indice"]) && ($_POST["indice"] != "")){
        for ($i=1; $i < ($_POST["indice"]+1); $i++) { 
           array_push($vector, $i);
        }

        $suma = recursiva($_POST["indice"], $vector);
    }
}
if (isset($_POST["compruebaExpresion"])){
    if (isset($_POST["expresion"]) && ($_POST["expresion"] != "")){
        $equilibrada = true;
        $parentesis=array();
        $contador=0;
        $expresion = str_split(trim ( $_POST["expresion"]));
        for ($i = 0; $i < count($expresion); $i++) {
            if ($expresion[$i] == "(") {
                $contador++;
                array_push($parentesis, $contador);
            }
            
            if ($expresion[$i] == ")") {
                $contador--;
                array_push($parentesis, $contador);
            }
        }
        print_r($parentesis);
        foreach ($parentesis as $key => $value) {
            if ($value < 0) {
                $equilibrada = false;  
            }
        }
        if($parentesis[(count($parentesis)-1)] != 0){
            $equilibrada = false;  
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
    <h1>Ejercicios básicos semana 13/5 Rafael Urbano Estepa</h1>
<fieldset>
    <h2>Suma los elementos del vector</h2>
    <form action="index.php" method="post">
        El indice del vector: <input type="number" name="indice"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($suma) && $suma != 0){
        echo "<br>";
        echo "La suma de los elementos del vector dado es: ".$suma;
    }
    ?>
</fieldset>

<fieldset>
    <h2>Cola</h2>
    <form action="index.php" method="post">
        Añadir a la cola: <input type="text" name="elemento"><br><br>
        <input type="submit" name="enviarCola" value="Añadir">
        <input type="submit" name="eliminarCola" value="Eliminar Último">
    </form>
    <?php
if (isset($cola)){
        echo $cola -> devuelvePrimero();
}
    ?>
</fieldset>

<fieldset>
    <h2>Equilibrio de parentesis</h2>
    <form action="index.php" method="post">
        Espresión a determinar: <input type="text" name="expresion"><br><br>
        <input type="submit" name="compruebaExpresion" value="Comprobar">
    </form>
    <?php
    if (isset($equilibrada)){
        if ($equilibrada){
            echo "La funcion ".$_POST["expresion"]." está equilibrada";
        }else{
            echo "La funcion ".$_POST["expresion"]." no está equilibrada";
        }
    }
    ?>
</fieldset>

<a href='cierraSesiones.php'>Cerrar Sesión</a><br>
<a href="https://github.com/RafaelUrbanoEstepa/Basicos29Php">Enlace a GitHub para ver el código</a>
</body>
</html>