<?
//$datosPersonales=array("nombre", "apellido", "email");
$nombre=$apellido=$email="";
$msgErrornombre=$msgErrorapellido=$msgErroremail="";
$datosPersonales=array(array("nombre"=>$msgErrornombre), 
            array("apellidos"=>$msgErrorapellido),
            array("email"=>$msgErroremail));


$procesaFormulario=false;

 function clearData($cadena){
    $cadenaLimpia=trim($cadena);
    $cadenaLimpia=htmlspecialchars($cadenaLimpia);
    $cadenaLimpia=stripslashes($cadenaLimpia);
    return $cadenaLimpia;
}

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
    $apellido=clearData( $_POST["apellidos"]);
    $email=clearData($_POST["email"]);
       
    if (empty($nombre)){
        $msgErrornombre="Nombre requerido";
        $procesaFormulario=false;
    }   

    if (empty($apellido)){
        $msgErrorapellido="apellido requerido";
        $procesaFormulario=false;
        }

    if (empty($email)){
        $msgErroremail="email requerido";
        $procesaFormulario=false;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
       
        $msgErroremail="email no válido";
        $procesaFormulario=false;
    }
}

 if($procesaFormulario){
    //limpiamos caracteres estraños
   
echo $nombre. "</br>".$apellido."</br>".$email;  



}else{
        ?>

    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='post'>

    <?
        foreach ($datosPersonales as $value) {
            foreach ($value as $id => $error) {
                # code...
            
            
            echo $id ." ";
            echo "<input type=\"text\" name=\"".$id."\" placeholder=\"".$id."\" value=\"\">" ;
            echo $error."</br>";
            echo "</br>";
        }
    }
   
   
?>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?
} 
    ?>
</body>

</html>