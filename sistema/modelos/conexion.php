<?php
class ConexionBaseDeDatos{
    
    private static $instancia = NULL;

    public static function crearConexion(){
        if(!isset( self::$instancia )){//if existe la conexion
            $opcionesPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=empleados','root','',$opcionesPDO);
             
        }
        return self::$instancia;
    }
}

?>