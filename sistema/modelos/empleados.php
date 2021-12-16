<?php
class Empleado{
    
    public $id;
    public $nombre;
    public $correo;


     public function __construct($id, $nombre, $correo){
        $this->id = $id; 
        $this->nombre = $nombre;
        $this->correo = $correo;
     }   

     public static function consultar(){
         $listaEmpleados = [];
         $conexionBD = ConexionBaseDeDatos::crearConexion();
         $sql = $conexionBD->query("SELECT * FROM empleados");
         foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
         }
         return $listaEmpleados;
     } 


    public static function crear($nombre, $correo)
    {
        $conexionBD = ConexionBaseDeDatos::crearConexion();
        $sql = $conexionBD->prepare("INSERT INTO empleados (nombre, correo) VALUES (?,?);");
        $sql->execute(array($nombre, $correo));
    }

    public static function borrar($id)
    {
        $conexionBD = ConexionBaseDeDatos::crearConexion();
        $sql = $conexionBD->prepare("DELETE FROM empleados WHERE id=?;");
        $sql->execute(array($id));
    }

    public static function buscar($id)
    {
        $conexionBD = ConexionBaseDeDatos::crearConexion();
        $sql = $conexionBD->prepare("SELECT * FROM empleados WHERE id=?;");
        $sql->execute(array($id));
        $empleado= $sql->fetch();
        return  new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
    }
    public static function editar($nombre, $correo, $id){
        $conexionBD = ConexionBaseDeDatos::crearConexion();
        $sql = $conexionBD->prepare("UPDATE empleados SET nombre = ?, correo = ? WHERE id = ?;");
        $sql->execute(array($nombre, $correo, $id));
    }
}