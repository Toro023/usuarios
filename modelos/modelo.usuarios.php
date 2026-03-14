<?php
include_once("connection.php");

class mdlUsuarios
{
    /* atributos */
    private $idUsuario;
    private $nombres;
    private $apellidos;
    private $cedula;
    private $usuario;
    private $password;
    private $con;

    /* metodos */
    public function __construct()
    {
        $this->con = new Conexion();
    } // Fin del constructor

    public function mdlListar()
    {
        $sql = "SELECT * FROM usuarios";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function mdlSet($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function mdlCrear()
    {
        $sql2 = "SELECT * FROM usuarios WHERE cedula='$this->cedula'";
        
        $resultado = $this->con->consultaRetorno($sql2);
        $filas = mysqli_num_rows($resultado);
        if ($filas == 0) {
            $sql = "INSERT INTO usuarios(nombres, apellidos, cedula, usuario, password) VALUES('$this->nombres',
             '$this->apellidos', '$this->cedula', '$this->usuario', '$this->password')";
            $this->con->consultaSimple($sql);
            return true;
        } else {
            return false;
        }
    }

    public function mdlConsultar()
    {
        $sql = "SELECT * FROM usuarios WHERE idUsuario='$this->idUsuario'";
        $resultado = $this->con->consultaRetorno($sql);
        $registro = mysqli_fetch_assoc($resultado); // "assoc" Convierte el resultado en un arreglo asociativo
        $this->idUsuario = $registro["idUsuario"];
        $this->nombres = $registro["nombres"];
        $this->apellidos = $registro["apellidos"];
        $this->cedula = $registro["cedula"];
        $this->usuario = $registro["usuario"];
        $this->password = $registro["password"];
        return $registro;
    }

    public function mdlEliminar()
    {
        $sql = "DELETE FROM usuarios WHERE idUsuario='$this->idUsuario'";
        $this->con->consultaSimple($sql);
    }

    public function mdlEditar()
    {
        $sql = "UPDATE usuarios SET nombres='$this->nombres', apellidos='$this->apellidos',
         usuario='$this->usuario', password='$this->password' WHERE idUsuario='$this->idUsuario'";
        $this->con->consultaSimple($sql);
    }

}// Fin de la clase usuarios

$miUsuario = new mdlUsuarios();
$miUsuario->mdlListar();
?>