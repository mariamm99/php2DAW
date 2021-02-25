<?
//AÑADIR TEMPORIZADOR
session_start();
$procesaForm=false;
$user;
$password;
if (!isset($_SESSION["aut"])) {
    $_SESSION["aut"]=false;
    $_SESSION["user"]="invitado";
    $_SESSION["count"]=0;

 }

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
    <title>Document</title>
</head>
<body>
  
<?
echo "Ejemplo de autentificación<br/>";
echo "Usted esta como ". $_SESSION['user']."<br/>";

if (isset($_POST["enviar"])) {
   $procesaForm=true;
   $user=clearData($_POST["user"]);
   $password=clearData($_POST["pasw"]);
   $contador=$_SESSION["count"];
   if ($user=="admin" and $password="admin" and $contador<3) {
        $_SESSION["aut"]=true;
    } else{
        $contador++;
    }
}


if ($_SESSION["aut"]) {
   mostrar_menu();
  // mostrar_cierreSesion();

} else if($contador>=3) {
   echo "usuario bloqueado";
}else{
    mostrar_formulario();
}


function mostrar_formulario(){
    ?>
    <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="post">
    <?
    echo "<p><input type=\"text\" name=\"user\" placeholder=\"user\" ></p>";
    echo "<p><input type=\"password\" name=\"pasw\" placeholder=\"password\" ></p>";
?> 
   <input type="submit" value="enviar"  name="enviar">
</form>
<?
}

function mostrar_menu() {


    echo "<a href=\"privado.php\">Privada</a><br/>";
    echo "<a href=\"publica.php\">Pública<br/>";
    echo "<a href=\"cierreSesion.php\"> Cerrar sesión <br/>";
}


?>
</body>
</html>