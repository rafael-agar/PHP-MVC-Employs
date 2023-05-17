<?php 

class BD{

    private static $instancia=NULL; 

    public static function crearInstancia(){

        if(!isset( self::$instancia)){

            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
             self::$instancia= new PDO('mysql:host=192.168.1.71;dbname=empleados','samsung','', $opcionesPDO);
          
        }
        return self::$instancia;

    }

}



?>