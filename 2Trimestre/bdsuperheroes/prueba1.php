<?php
include("config/config.php");
include("Superheroe.php");

$datos=array("nombre"=>"superman", "velocidad"=> 8);

$sh=Superheroe::getInstancia();
// $sh->set($datos);
// var_dump($sh);

var_dump($sh->get(65));

// $datosModificar=array("id"=>60, "nombre"=>"supermanEdit", "velocidad"=> 3);
// var_dump($sh->edit($datosModificar));

// var_dump($sh->delete(60));

// var_dump($sh->buscarPorNombre("superman"));

echo "muestra todos <br><br>";

// var_dump($sh->MostrarTodos());





// $sh_sing2=Superheroe::getInstancia();
// var_dump($sh_sing2);

// $sh_sing2=Superheroe::getInstancia();
// var_dump($sh_sing2);

// $sh_sing1=new Superheroe();
// var_dump($sh_sing1);



?>