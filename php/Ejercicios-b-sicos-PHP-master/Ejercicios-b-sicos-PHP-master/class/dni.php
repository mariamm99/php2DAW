<?php
class Dni{
    private $_dni;
    private $_mensaje = "";

    public function __construct($dni){
        $this->_dni = $this->validar($dni);
    }

    private function validar($dni){
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
            $this->_mensaje = "Dni correcto y válido";
        }else{
            $this->_mensaje = "Dni incorrecto";
        }
    }

    public function getMensaje(){
        return $this->_mensaje;
    }
}