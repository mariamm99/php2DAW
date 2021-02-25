<?
include "libreria.php";
session_start();

/**
 * Comprobamos que el fichero sea correcto de tipo text/plain --> txt
 */
if ($_FILES["file"]["type"] == "text/plain"){
    if ($_FILES["file"]["error"] > 0) {
        //echo "Error: " . $_FILES["file"]["error"] . "<br/>";
         $_SESSION["error"]=$_FILES["file"]["error"];
    } 
}else {
    
     $_SESSION["error"]="archivo no válido, debe ser un archivo txt";
    header("Location: indiceCrearUsuarios.php");
}



if (isset($_POST["enviar"]) && isset($_POST["tipo"])) {
    $arrayUsers=crearUsuarios();

    if ($_POST["tipo"]=="linux") {
        $nomArchivo= usuarioLinux($arrayUsers);
    }else{
        $nomArchivo=usuarioMysql($arrayUsers);
    }
    descargar($nomArchivo);
}
    
/**
 * -Abrimos archivo
 * -creamos usuarios 
 * -eliminamos tildes y mayusculas
 */
function crearUsuarios(){
   $aUsuarios=[];


$archivo = fopen('RelAluProMatUni.txt','r'); 

    while (!feof($archivo)){
        $linea = fgets($archivo);
        $linea=caracter(strtolower($linea));
        // echo $linea;
        if(preg_match("/^[a-z]+(\s)+[a-z]+(\,)(\s)+[a-z]+/im", $linea)){
            $resultado="";
                if(preg_match_all("/\b[a-z]{2}/i", $linea, $matches)){
                    // print_r($matches);
                    foreach ($matches as $key => $value) {
                        for ($i=0; $i < 3; $i++) { 
                            $resultado.= substr($value[$i], 0, 2);
                        }      
                    } 
                    // echo $usuario;
                }
                $resultadotmp=$resultado;
                $contador=1;

                while (in_array($resultado, $aUsuarios)) {
                    $contador++;
                    $resultado=$resultadotmp.$contador;
                }
                
            array_push($aUsuarios, $resultado);
            
            }   
    }
fclose($archivo);

return $aUsuarios;

}


/**
 * crea usuario en linux 
 * */
function usuarioLinux($aUsuarios){
    $curso=$_POST["curso"].$_POST["nombre"].$_POST["anio"];


    // print_r($aUsuarios);
    $fechaactual=date("Y-m-d");
    $nombreArchivo = "usuarios".$fechaactual.".sh";
    $archivo = fopen($nombreArchivo,'w'); 

    $curso=$_POST["nombre"];

    foreach ($aUsuarios as $value) {
        fwrite($archivo, "groupadd ".$value." \n");
        fwrite($archivo, "useradd ".$value." -m -d /home/".$curso."/".$value." -s /bin/bash -g ".$value." -p $(echo 'password') \n");
        fwrite($archivo, "mkdir /home/".$curso."/".$value."/public_html \n");
        fwrite($archivo, "chown -R ".$value .":".$value." /home/".$curso."/".$value." \n");
        fwrite($archivo, " \n");

    }
    return $nombreArchivo;

}

/**
 * crea usuario en mysql
 */
function usuarioMysql($aUsuarios){
    $curso=$_POST["curso"];
    $nombre=$_POST["nombre"];
    $anio=$_POST["anio"];
    $fechaactual=date("Y-m-d");
    $nombreArchivo = "usuarios".$fechaactual.".sql";
    $archivo = fopen($nombreArchivo,'w'); 

// print_r($aUsuarios);

    foreach ($aUsuarios as $value) {

        $baseDatos= $curso.$nombre.$anio."_".$value;

        fwrite($archivo, "CREATE USER " . $value."@'localhost' IDENTIFIED BY 'password'; \n");
        fwrite($archivo, "CREATE DATABASE " . $baseDatos." ;\n");
        fwrite($archivo, "GRANT ALL PRIVILEGES ON " . $baseDatos . " TO '".$value."'@'localhost' IDENTIFIED BY 'password' ;\n");
        
        fwrite($archivo, " \n");

    }

    return $nombreArchivo;
    
}


function descargar($filename){
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    readfile($filename);
    die();
}

?>