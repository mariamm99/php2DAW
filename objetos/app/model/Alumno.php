<?
require_once "Persona.php";

class Alumno extends Persona{
    private $_nie;

    public function __construct(){
        
    }

    public function saluda(){
        echo parent::saluda();
        echo "soy alumno";
    }
}

?>