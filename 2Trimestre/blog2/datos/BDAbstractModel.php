<?php
abstract class BDAbstractModel{
    private static $user= USER;
    private static $passwd= PASSWD;
    private static $localhost= LOCALHOST;
    private static $puerto= PUERTO;
    private static $nombre= BASEDATOS;

    protected $mensaje="";
    protected $conex;  //manejar bds

    protected $query;
    protected $parametros=array();
    protected $row=array();

    // abstract protected function get();
    abstract protected function set();
    // abstract protected function edit();
    // abstract protected function delete();

    protected function open_connection(){
        $dsn='mysql:host='.self::$localhost.';'
        .'dbname='.self::$nombre.';'
        .'port='.self::$puerto;

        try{
            $this->conex = new PDO($dsn, self::$user, self::$passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
            return $this->conex;

        }catch(PDOException $e){
            printf("conexion fallida %s", $e->getMessage());
            exit();
        }
        
    }

    public function lastInsert(){
        return $this->conex->lastInsertId();
    }

    public function close_connection(){
        $this->conex=null;
    }

    #ejecutar insert, delete y update con esta funcion pq no devuelve nada
    #no utilizaremos y pasa


    #
    protected function get_results_from_query() 
    {
      $this->open_connection();
    //   $_result = false;
      if (($_stmt = $this->conex->prepare($this->query))) {
         if (preg_match_all('/(:\w+)/', $this->query, $_named, PREG_PATTERN_ORDER)) {
            $_named = array_pop($_named);
            foreach ($_named as $_param) {
               $_stmt->bindValue($_param, $this->parametros[substr($_param, 1)]);
            }
         }

      try {
         if (! $_stmt->execute()) {
            printf("Error de consulta: %s\n", $_stmt->errorInfo()[2]);
         }
         //$_result = $_stmt->fetchAll(PDO::FETCH_ASSOC);
         $this->rows = $_stmt->fetchAll(PDO::FETCH_ASSOC);
         $_stmt->closeCursor();
      } 
      catch(PDOException $e){
            printf("Error en consulta: %s\n" , $e->getMessage());
      }
    }

    //return $_result;
   }

}
?>

