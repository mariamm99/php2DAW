<?
if ($_POST["recordar"]=="1") {
    
    setcookie("user", $_POST["nombre"], time()+3600);
    setcookie("clave", $_POST["contrasena"], time()+3600);
    
} else{
    setcookie("user", $_POST["nombre"], time()-3600);
    setcookie("clave", $_POST["contrasena"], time()-3600);
}

$user=$_COOKIE['user'];
$clave=$_COOKIE['clave'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
    <?
    echo "<input type=\"text\" name=\"nombre\" value= \"$user\">";
    echo "<input type=\"text\" name=\"contrasena\" value= \"$clave\">";
    ?>
     <!-- <input type="text" name="nombre" value=<? echo "\"$user\"";?> >
     <input type="password" name="contrasena" value= <? echo "\" $clave\"";?>> -->
    
        <input type="submit" value="enviar" name="enviar">

<p>Recordar <input type="checkbox" name="recordar" id="recordar" value="1"></p>
        
    </form>
</body>
</html>