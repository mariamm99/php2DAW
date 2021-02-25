<?php


include "config/config.php";
include "Superheroe.php";
$sh = Superheroe::getInstancia();

if (isset($_REQUEST["q"])) {
    $q = $_REQUEST["q"];
    $todos = $sh->nombres($q);


    $hint = "";

    // lookup all hints from array if $q is different from ""
    if ($q !== "") {
        $q = strtolower($q);
        $len = strlen($q);
        for ($i=0; $i < sizeof($todos); $i++) { 
            # code...
    
        foreach ($todos[$i] as $name) {
          
            if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
            }
        }
    }
}

    // Output "no suggestion" if no hint was found or output correct values
    echo $hint === "" ? "no suggestion" : $hint;
}