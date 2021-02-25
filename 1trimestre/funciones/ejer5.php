<?
$aMenu = array("Inicio" => "dniIndex.php", "Enlace 2" => "factorialIndex.php", "contacto"=>"nombreUsuarios.php"
);

$seccionMenu = array_map(function ($menu) {
    return $menu;
    }, $aMenu);
    
//print_r($seccionMenu);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Este menú te manda a otros ejercicios realizados </h1>
<ul>
<?

foreach ($seccionMenu as $key => $value) {
echo "<li><a href=\"$value\"> $key </a> </li>";
}
?>
</ul>

<form action="#" method="post">

<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/funciones/ejer5.php"><input type="button" name="github"></a></p>

</form>
</body>
</html>