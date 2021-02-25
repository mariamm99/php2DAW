<?
$nombre=$url=$email=$genero=$transporte=$opcion="";
$msgErrornombre=$msgErrorUrl=$msgErroremail=$msgErrorComentario=$msgErrorGenero="";

$aGenero=array("hombre","mujer", "otro");
$aTransporte=array("coche", "bici", "patinete");
$aOpciones=array("1", "2" , "3", "4");
$aMarcas=array("renault", "Mercedes", "Citroen", "Volvo", "bmw");

function clearData($cadena){
    $cadenaLimpia=trim($cadena);
    $cadenaLimpia=htmlspecialchars($cadenaLimpia);
    $cadenaLimpia=stripslashes($cadenaLimpia);
    return $cadenaLimpia;
}

$procesaFormulario=false;

$espacio = "</br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="author" content="María Moreno Muñoz">
    <title>Document</title>
</head>

<body>


    <? 



if (isset($_POST["enviar"])){
    $procesaFormulario=true;
    $nombre=clearData( $_POST["nombre"]);
    $url=clearData( $_POST["URL"]);
    $email=clearData($_POST["email"]);
    $comentario=clearData($_POST["comentario"]);
    $url=clearData($_POST["url"]);
    $genero=$_POST["genero"];
    $opcion=$_POST["opciones"];
    
    if (empty($nombre)){
        $msgErrornombre="Nombre requerido";
        $procesaFormulario=false;
    }   

    if (empty($email)){
        $msgErroremail="email requerido";
        $procesaFormulario=false;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       
        $msgErroremail="email no válido";
        $procesaFormulario=false;
    }

    if (empty($comentario)) {
        $msgErrorComentario="Comentario requerido";
        $procesaFormulario=false;
    }

    if (empty($genero)) {
       
        $msgErrorGenero="genero requerido";
        $procesaFormulario=false;
    }
}

 if($procesaFormulario){
    //limpiamos caracteres estraños
   
echo "<p>Nombre: $nombre</p>";
echo "<p>url: $url</p>";
echo "<p>email: $email</p>";
echo "<p>comentario: $comentario</p>";
echo "<p>genero: $genero</p>";
echo "<p> transportes seleccionados </br>";
foreach($_POST['transporte'] as $selected){
    echo $selected."</br>";
    }
echo "</p>";
echo "<p>opcion elegida: $opcion </p>";
echo "<p> Marcas: </br>";
foreach($_POST['marcas'] as $selected){
    echo $selected."</br>";
    }
echo "</p>";



}else{
        ?>

    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='post'>
        <?
   echo "Nombre: <input type=\"text\"  placeholder=\"nombre\"  name=\"nombre\" value=$nombre > ";
   
   echo "* ".$msgErrornombre; 
   echo $espacio;
   
   echo "Email: <input type=\"text\" placeholder=\"email\" name=\"email\" value=$email>";
   
   echo "* ".$msgErroremail;
   echo $espacio;
   
    echo "URL: <input type=\"text\" placeholder=\"url\" name=\"url\" value= $url>"; 

   echo $msgErrorUrl;
   echo $espacio;
  

   echo " <p>Escriba un comentario</p>";
   echo "* ".$msgErrorComentario;
    echo "<textarea name=\"comentario\" id=\"comentario\" cols=\"30\" rows=\"10\">$comentario</textarea>";
    
    
echo $espacio;

foreach ($aGenero as  $genero) {
    echo " <input type=\"radio\" name=\"genero\" value=$genero>";
    echo "<label for=$genero>$genero</label>";
}
echo "* ".$msgErrorGenero;
echo $espacio;

foreach ($aTransporte as $transporte) {
    echo " <input type=\"checkbox\" name=\"transporte[]\" value=$transporte>";
    echo "  <label for=$transporte>$transporte</label>";
}
echo $espacio;

echo "Opciones: <select name=\"opciones\">";
foreach ($aOpciones as $value) {
    echo"<option>$value</option>";
}
echo "</select> $espacio";

echo "<select name=\"marcas[]\" size=\"3\" multiple>";

foreach ($aMarcas as $value) {
    echo"<option>$value</option>";
}

?>
        </select>
        <br>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?
} 
    ?>

    <p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
        <a href="https://github.com/mariamm99/php2DAW/blob/main/formEjemplo/form2.php"><input type="button" value="github" name="github"></a></p>

</body>

</html>