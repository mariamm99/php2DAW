<?php
include "./class/numeroRomano.php";
include "./class/matriz.php";

if (isset($_POST["enviar"])){
    if (isset($_POST["numeroRomano"]) && ($_POST["numeroRomano"] != "")){   
        $numeroRomano = new NumeroRomano($_POST["numeroRomano"]);
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios básicos Rafael Urbano Estepa</title>
</head>
<body>
    <h1>Ejercicios básicos semana 22/4 Rafael Urbano Estepa</h1>
<fieldset>
    <h2>Pasar de número romano a arábigo</h2>
    <form action="index.php" method="post">
        El número en notacion romana: <input type="text" name="numeroRomano"><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    if (isset($_POST["numeroRomano"]) && ($_POST["numeroRomano"] != "") && $numeroRomano->conversor() != 0){
        echo "<br>";
        echo $numeroRomano->conversor();
    }elseif(isset($_POST["numeroRomano"]) && ($_POST["numeroRomano"] != "")){
        echo "<p style='color: red;'>Introduzca solo números romanos</p>";
    }
    ?>
</fieldset>

<fieldset>
    <h2>Los tres primeros números perfectos</h2>
    <?php
    $arrayPerfectos= array();

    for ($divisor=1; $divisor < 1000; $divisor++) { 
        $arrayDivisores = array();
        for($i = 1; $i < $divisor; $i ++) {
            if ($divisor % $i == 0) {
                array_push($arrayDivisores, $i);
            }
        }

        if ($divisor == array_sum($arrayDivisores)){
            array_push($arrayPerfectos, $divisor);
            echo $divisor."<br>";
        }
    }

    echo "La suma de los tres primero numeros perfectos es: ".array_sum($arrayPerfectos);

    ?>
</fieldset>

<fieldset>
    <h2>Matrices cuadradas simétricas</h2>
    <?php

   if (!isset($_POST["tamaño"]) || $_POST["tamaño"] == ""){
    echo"
    <form action=\"index.php\" method=\"post\">
        ¿Cual es el tamaño de la matriz?<input type=\"number\" name=\"tamaño\" min=\"2\" max=\"10\"><br>
        <br>
        <input type=\"submit\" name=\"enviar\" value=\"Enviar\">
    </form>
    ";
    }else{
        echo"<form action=\"index.php\" method=\"post\">
        <table>
        ";
        for ($i=0; $i < $_POST["tamaño"]; $i++) { 
            echo "<tr style='border: 1px solid black;'>";
            for ($j=0; $j < $_POST["tamaño"]; $j++) { 
                echo "<td style='border: 1px solid black; margin: 5px;'>";
                echo "<input type=\"number\" name=\"matriz[$i][$j]\" min=\"0\"/>";
                echo "</td>";
            }
        }
        echo"
        </tr>
        </table>
            <input type=\"submit\" name=\"enviar\" value=\"Enviar\">
        </form>
        ";
    }
    if (isset($_POST["matriz"]) && ($_POST["matriz"] != "")){   
        $matriz = new Matriz($_POST["matriz"]);
        if ($matriz->validar()) {
            echo "<br> La matriz introducida es simétrica";
        }else{
            echo "<br> La matriz introducida no es simétrica";
        }
       
    }
    ?>
</fieldset>

<a href="https://github.com/RafaelUrbanoEstepa/Ejercicios-b-sicos-PHP">Enlace a GitHub para ver el código</a>
</body>
</html>