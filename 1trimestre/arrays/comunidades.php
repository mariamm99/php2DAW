<?php
$comunidades = array(
array("comunidades" =>'Andalucía', "provincias" =>array("Córdoba" => 202, "Málaga" =>300, "Sevilla"=> 100, "Cádiz"=> 50, "Huelva"=>40, "Jaen"=>30, "Granada"=> 120),
),
array("comunidades" =>'Castilla y León', "provincias" =>array("León" =>20,"Burgos"=>30,"Palencia"=>70,"Valladolid"=>90,"Zamora"=>55,"Soria"=>88, "Segovia"=>33, "Ávila"=>44, "Salamanca"=>77),
),
array("comunidades" =>'Madrid', "provincias" => array("Madrid"=>2000),
),
array("comunidades"=> "Aragón", "provincia"=>array(" Huesca"=>200, "Teruel"=>33, "Zaragoza"=>180),
),
array("comunidades" =>'Asturias', "provincias" => array("Oviedo"=>499),
),
array("comunidades" =>'Baleares', "provincias" => array("Palma de Mallorca"=>20),
),
array("comunidades"=> "Canarias", "provincia"=>array(" Santa Cruz de Tenerife"=>70, "Las Palmas de Gran Canaria"=>60),
),
array("comunidades" =>'Cantabria', "provincias" => array("Santander"=>200),
),
array("comunidades" =>'Castilla-La Mancha', "provincias" =>array("Albacete"=>70, "Ciudad Real"=>220, "Cuenca"=>71, "Guadalajara"=>99, "Toledo"=>160)
)
);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> María Moreno Muñoz</h1>
<h2> Casos totales por provincia</h2>
    <?php
            
            foreach ($comunidades as $key => $value) {
                $casosTotales=0;
                foreach ($value as $comunidad) {
                    
                    error_reporting(0);
                    if (strcmp( $comunidad, "Array" ===0)) {
                        echo "<p> Comunidad <b> $comunidad </b> tiene las provincias de:</p> ";           
                       
                    }else {
                        foreach ($comunidad as $provincia => $casos) {
                            echo "<p> $provincia</p>";
                            $casosTotales+=$casos;
                        }
                     if ($casosTotales>500) {
                      $color= "red";
                     } else {
                        $color="green";
                     }
                     echo "<p style = 'color:$color;'>casos totales $casosTotales</p>";
                        
                    }
                    
                }
            }
    ?>

<form action="post">    
<p><a href="../index.php"><input type="button" value="index" name="Volver"></a>
<a href="https://github.com/mariamm99/php2DAW/blob/main/formEjemplo/form2.php"><input type="button" value="github" name="github"></a></p>
</form>
</body>
</html>
