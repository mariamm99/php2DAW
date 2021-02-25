<?
class Empleado{
    private $_nombre;
    private $_apellido1;
    private $_apellido2;
    private $_sueldo;

    public function __construct($nombre, $apellido1, $apellido2, $sueldo){
        $this -> _nombre = $nombre;
        $this -> _apellido1 = $apellido1;
        $this -> _apellido2 = $apellido2;
        $this -> _sueldo = $sueldo;
    }

    public function pagarImpuesto(){
        if ($this->_sueldo>3000) {
            
            return $this->_nombre." debe pagar impuestos sueldo: ". $this->_sueldo;
        }
        return $this->_nombre." NO debe pagar impuestos sueldo: ". $this->_sueldo;
    }
}



?>