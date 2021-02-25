<?php
session_start();
echo session_id();

$_SESSION["intervaloTime"]=20;

if(isset($_SESSION['inicioTime'])) {
    $tiempo_transcurrido = time();
    /*se multiplica por 60 segundos ya que se configura en minutos*/
    $tiempo_maximo = $_SESSION['inicioTime'] + ( $_SESSION['intervaloTime'] * 60 ) ;
    if($tiempo_transcurrido > $tiempo_maximo){
      header("Location: salir.php");
    
    }else {
    /*se resetea el inicio*/
        $_SESSION['inicioTime'] = time();
     }
}   else {
    /*Si no existe se crea o si lo prefiere destruya la sesión*/
     $_SESSION['inicioTime'] = time();
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Mundo!!</h1>
    <!-- Enlace a segunda página -->
    <p><a href="pagina2.php">Enlace de recarga</a></p>
</body>
</html>