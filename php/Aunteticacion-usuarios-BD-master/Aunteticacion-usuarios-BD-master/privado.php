
<?php
session_start();
if(isset($_SESSION["perfil"]) && $_SESSION["perfil"]!="registrado"){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La cara oculta de la luna</title>
</head>
<body>
    <h1>Bienvenido a la cara oculta de la luna</h1>
    <a href='cierraSesiones.php'>Volver</a>
</body>
</html>