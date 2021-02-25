<?
/**Enlace a proyectos con buscador */

$aActividades=array(
"DNI" => "calcular la letra del NIF a partir del número del DNI",
"Factorizar"=>"Escribe un script que permita factorizar un número pasado por la URL",
"Generar usuario"=>" generar los nombres de usuarios dado en nombre y apellido de los usuarios",
"Sumar digitos"=>"Función recursiva que permita sumar los dígitos de un número pasado por la URL.",
);

function muestraCoincidencias($array){
    $texto=$_POST["buscarText"];


    foreach ($array as $key => $value) {
        //para comprobar sin mirar mayusculas y minusculas devuelve 0 si son iguales
        if (strcasecmp ($texto, $key)== 0 || strcasecmp ($texto, $value)== 0) { 
            return true;          
        }
        
    }
    return false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="María Moreno Muñoz">
    <title>Actividad portafolios</title>
</head>
<body>
    
    <?
foreach ($aActividades as $key => $value) {
    echo "<p> Titulo: $key  </p>";
    echo "<p> Descripción: ". $value."</p>";
}
    ?>
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>

    <p><h3>Buscar ejercicio por título</h3></p>
    <input type="text" name="buscarText" >
    <input type="submit" value="buscar" name="buscar">

    </form>

<?



if(isset($_POST["buscar"])){

if (muestraCoincidencias($aActividades)) {
    echo "esta";
    echo "<p> Titulo: $key  </p>";
    echo "<p> Descripción: ". $value."</p>";
}else{
    echo "<p> No hay datos que coincidan con tu busqueda</p>";
}


}
?>

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/portfolios.php"><input type="button" value="github" name="github"></a></p>


</body>
</html>

