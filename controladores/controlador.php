<?php
include_once("modelos/usuarios.php");
class ControladorUsuarios
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new Usuarios();
    }

    public function listar()
    {
        $listar = $this->usuario->listar();
        return $listar;
    }

    public function crear($cedula, $nombre, $apellidos, $usuario, $password)
    {
        $this->usuario->set("cedula", $cedula);
        $this->usuario->set("nombres", $nombre);
        $this->usuario->set("apellidos", $apellidos);
        $this->usuario->set("usuario", $usuario);
        $this->usuario->set("password", $password);

        $resultado = $this->usuario->crear();
        return $resultado;
    } // Fin del metodo crear

    public function consultar($id)
    {
        $this->usuario->set("idUsuario", $id);
        $registro = $this->usuario->consultar();
        return $registro;
    } // Fin del metodo consultar

    public function eliminar($id)
    {
        $this->usuario->set("idUsuario", $id);
        $this->usuario->eliminar();
    } // Fin del metodo eliminar

    public function editar($id, $cedula, $nombre, $apellidos, $usuario, $password)
    {
        $this->usuario->set("idUsuario", $id);
        $this->usuario->set("cedula", $cedula);
        $this->usuario->set("nombres", $nombre);
        $this->usuario->set("apellidos", $apellidos);
        $this->usuario->set("usuario", $usuario);
        $this->usuario->set("password", $password);

        $resultado = $this->usuario->editar();
        return $resultado;
    } // Fin del metodo editar

} // Fin de la clase

?>