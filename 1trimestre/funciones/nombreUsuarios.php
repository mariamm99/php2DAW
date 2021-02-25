<?

$aUsuarios = array(

    array('nombre'=>'Jesús','apellido1'=>'Martínez','apellido2'=>'García'),

    array('nombre'=>'Mercedes','apellido1'=>'Calamaro','apellido2'=>'Pedrajas'),

    array('nombre'=>'Elena','apellido1'=>'Pérez','apellido2'=>'')
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?
$usuario=function($aUsuario){
$nombre="";
    foreach ($aUsuario as $key =>$value ) {
        $value=clean_code($value);
        if ($key == "nombre") {
            $inicialesNombre=substr($value, 0, 2);
        }else{
        
        $nombre.=substr($value, 0, 2);
    }
}
$nombre.=$inicialesNombre;
return $nombre;
};


foreach ($aUsuarios as $arrayUsuario) {
    echo "</br>Usuario : ". $usuario($arrayUsuario);
}


function clean_code($cadena){
    $originales = 'ÁÉÍÓÚáéíóú';
    $modificadas = 'AEIOUaeiou';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtolower($cadena);
    return utf8_encode($cadena);
}

?>
<form action="#" method="post">
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a></p>
<p><a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/nombreUsuarios.php"><input type="button" name="github"></a></p>

</form>
</body>
</html>