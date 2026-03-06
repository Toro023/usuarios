<?php
include_once("connection.php");

class Usuarios{
    /* atributos */
    private $idusuario;
    private $nombres;
    private $apellidos;
    private $cedula;
    private $usuario;
    private $password;
    private $con;

    /* metodos */
    public function __construct(){
        $this->con = new Conexion();
    } // Fin del constructor

    public function listar(){
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($sql);
        /* var_dumb($resultado); */
        return $resultado;
    }


}// Fin de la clase usuarios

$miUsuario = new Usuarios();
$miUsuario->listar();
?>