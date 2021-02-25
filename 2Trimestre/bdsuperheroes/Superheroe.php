<?php
include("config/BDAbstractModel.php");

class Superheroe extends BDAbstractModel{
    private static  $instancia;
    private $id;
    private $nombre;
    private $velocidad;
    private $created_at;
    private $updated_at;

    public static function getInstancia()
    {
        if (!isset(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        }

        return self::$instancia;
    }

    public function __clone()
    {
        trigger_error("la clonación no es perimitda!", E_USER_ERROR);
    }


    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function set($user_data = array())
    {
        foreach ($user_data as $campo => $valor) {
            $$campo = $valor;
        }

        $this->query = "INSERT INTO bd_superheroes(nombre, velocidad) VALUE (:nombre, :velocidad)";

        $this->parametros["nombre"] =  $user_data["nombre"];
        $this->parametros["velocidad"] =  $user_data["velocidad"];

        $this->get_results_from_query();

        $this->mensaje = "Superheroe agregado correctamente";
    }

    public function get($id="") {
        if($id!=""){
        $this->query="SELECT * from bd_superheroes WHERE id =$id";

        $this->parametros["id"]=$id;

        $this->get_results_from_query();
    }

        if (count($this->row)==1) {
            foreach ($this->rows[0] as $propiedad => $valor) {
                $this->$propiedad=$valor;
            }
            $this->mensaje="sh encontrado";
        }else{
            $this->mensaje="sh NO encontrado";
        }

        return $this->rows;

    }
    
    public function edit($user_data=array()) {

        foreach ($user_data as $campo => $valor) {
            $$campo=$valor;
        }

        $this->query="UPDATE bd_superheroes SET nombre=:nombre , 
        velocidad=:velocidad WHERE id=:id";

        $this->parametros["nombre"]=$nombre;
        $this->parametros["velocidad"]=$velocidad;
        $this->parametros["id"] = $id;

        $this->get_results_from_query();
        $this->mensaje = "SH modificado";
    }

    public function delete($id="") {
        $this->query="DELETE FROM bd_superheroes WHERE id=:id";
        $this->parametros["id"] = $id;

        $this->get_results_from_query();
        $this->mensaje = "SH borrado";
    }

    function __constructor(){

    }

    public function guardarenBD(){
        $this->query="INSERT INTO bd_superheroes(nombre, velocidad) VALUE (:nombre, :velocidad)";

        $this->parametros["nombre"] =  $this->nombre;
        $this->parametros["velocidad"] = $this->velocidad;

        $this->get_results_from_query();

        $this->mensaje = "Superheroe agregado correctamente";
    }

    public function buscarPorNombre($nombre=""){
        
        if($nombre!=""){
            $this->query="SELECT * FROM bd_superheroes where nombre=\"$nombre\"";
    
            $this->parametros["nombre"]=$nombre;
    
            $this->get_results_from_query();
        }
    
            if (count($this->row)<=1) {
            //     foreach ($this->rows[0] as $propiedad => $valor) {
            //         $this->$propiedad=$valor;
            //     }
            //     $this->mensaje="sh encontrado";
            // }else{
                $this->mensaje="sh NO encontrado";
            }
    
            return $this->rows;
        
    }

    public function mostrarTodos(){
        $this->query="SELECT * FROM bd_superheroes";
        $this->get_results_from_query();

        if (count($this->rows)<=1) {
        //     foreach ($this->rows[0] as $propiedad => $valor) {
        //         $this->$propiedad=$valor;
        //     }
        //     $this->mensaje="sh encontrado";
        // }else{
            $this->mensaje="sh NO encontrado";
        }

        return $this->rows;

    }

    function nombres($nombre){
        $this->query="SELECT nombre from bd_superheroes WHERE nombre LIKE '%$nombre%'";
    
        $this->get_results_from_query();
        
        return $this->rows;
    }
    

}