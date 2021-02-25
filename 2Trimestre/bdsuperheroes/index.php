<?php
include "config/config.php";
include "Superheroe.php";
$sh=Superheroe::getInstancia();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='POST'>

        <input type="text" name="buscartxt" placeholder="buscar">
        <input type="submit" value="buscar" name="buscar">
        <input type="submit" value="anadir" name="anadir">
<?php


 /**Borrar */
if (!empty($_GET["borrar"])) {
    $id_pulsado = $_GET["borrar"];
    $sh->delete($id_pulsado);
}

//   añadir
if (isset($_POST["anadir"])) {
?>
<br>

    <label for="nombre">Nombre:</label>
    <input type="text"  name="nombre">
    <label for="velocidad">velocidad</label>
    <input type="number" name="velocidad" id="velocidad">
    <input type="submit" value="nuevo superheroe" name="nuevoSuper">
    <input type="submit" value="cancelar" name="cancelar">

<?php

   if (isset($_POST["cancelar"])) {
        listarTodos($sh);
    }

}

if(isset($_POST["nuevoSuper"])){
    $nombre=$_POST["nombre"];
    $velocidad=$_POST["velocidad"];

    $datos=array("nombre"=>$nombre,"velocidad"=>$velocidad);
    $sh->set($datos);
}


if (!empty($_GET["editar"])) {

    $id=$_GET["editar"];

    $datos=$sh->get($id);
   
    $nombre=$datos[0]["nombre"];
    $velocidad=$datos[0]["velocidad"]

    ?>
    <br>
    
    <label for="nombre">Nombre:</label>
    <?php echo "<input type=\"text\" name=\"nombre\" id=\"nombre\" value=$nombre>"; ?>
    <label for="velocidad">velocidad</label>
    <?php echo "<input type=\"text\" name=\"velocidad\" id=\"velocidad\" value=$velocidad>"; ?>
    <?php echo "<input type=\"hidden\" name=\"id\" value=$id>" ;?>
    
    <input type="submit" value="guardar" name="guardar">
    <input type="submit" value="cancelar" name="cancelar">

   

<?php

}

if (isset($_POST["guardar"])) {
    $datos=array("id"=>$_POST["nombre"], "nombre"=>$_POST["nombre"],"velocidad"=>$_POST["velocidad"]);
    $sh->edit($datos);
}



if (isset($_POST["buscar"])) {
   $nbuscar=$_POST["buscartxt"];
  
   if ($_POST["buscartxt"]!=null) {
    $resultado=$sh->buscarPorNombre($nbuscar);

        if (count($resultado)>=1) {
            echo "<ul>";
            foreach ($resultado as $value) {
                echo '<li>' . $value["nombre"] . '  <a href="?&editar=' . $value["id"] . '">Editar</a> <a href="?&borrar=' . $value["id"] . '">Eliminar</a></li>';
            }
            echo "</ul>";
        }else{
            echo "no se han encontrado resultados";
        }
   }else{
        listarTodos($sh);
   }
   
}else{

listarTodos($sh);

}

        ?>
         <a href="ajax.php">Actividad de busqueda por ajax</a>
    </form>

</body>

</html>


<?php

function listarTodos($sh){

    $resultado=$sh->mostrarTodos();

    echo "<table border=\"1\">";
    foreach ($resultado as $value) {

        echo '<tr> <td>' . $value["nombre"] . ' </td> <td> <a href="?&editar=' . $value["id"] . '">Editar</a> </td> <td> <a href="?&borrar=' . $value["id"] . '">Eliminar</a></td></tr>';
    }
    echo "</table>";
}

?>



