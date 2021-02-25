<?php


function caracter($var)
{

    $var = trim($var);

    $var = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        'a',
        $var
    );

    $var = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        'e',
        $var
    );

    $var = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        'i',
        $var
    );

    $var = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô' ),
        'o',
 $var
    );

    $var = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        'u',
        $var
    );

    $var = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'n', 'c', 'C'),
        $var
    );

    //Esta parte se encarga de eliminar cualquier caracter extra�o
    // $var = str_replace(
    //     array( "º", "-", "@", "·", "$", "%", "&", "/", "'", "[", "`", "+", "}", "{", ">", "<", ";", ",", ":", "."),
    //         '',
	// $var
    // );

   return $var;

}


?>
