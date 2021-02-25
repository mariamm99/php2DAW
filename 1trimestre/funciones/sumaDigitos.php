<?
  $numero= $_GET["numero"];

  $resultado=0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'  method="GET">
    <p>Introduzca un numero</p>
    <input type="text" name="numero" id="numero">
    <input type="submit" value="enviar" name="enviar">
    </form>

    <?
  
  if (isset($_GET["enviar"])) {
    if (!is_numeric($_GET["numero"])) {
      echo "los datos introducidos no son números";
    }else{
      echo "suma: ".suma($numero);
    }
}
    function suma($numero){
        //obtenemos el resto para ir sumando número por número
        $resto=$numero%10;
        //cambiamos número por el valor sin la última cifra
        $numero=round($numero/10);
        //cuando número sea 0 rompemos la cadena
        if ($numero==0) {
            return $numero + $resto;
        }
        return $resto + suma($numero);  
    }
    
    ?>

    <form action="#" method="post">
    <p><a href="../index.php"><input type="button" value="index" name="Volver"></a></p>
  <p><a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/sumaDigitos.php"><input type="button" name="github"></a></p>

    </form>
</body>
</html>