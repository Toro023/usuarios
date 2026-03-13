<?php
include_once("modelos/modelo.usuarios.php");
class ControladorUsuarios
{
    private $usuario;

    public function __construct()
    {
        $this->usuario = new mdlUsuarios();
    }

    public function ctrListar()
    {
        $listar = $this->usuario->mdlListar();
        return $listar;
    }

    public function ctrCrear($cedula, $nombre, $apellidos, $usuario, $password)
    {
        $this->usuario->mdlSet("cedula", $cedula);
        $this->usuario->mdlSet("nombres", $nombre);
        $this->usuario->mdlSet("apellidos", $apellidos);
        $this->usuario->mdlSet("usuario", $usuario);
        $this->usuario->mdlSet("password", $password);

        $resultado = $this->usuario->mdlCrear();
        return $resultado;
    } // Fin del metodo crear

    public function ctrConsultar($id)
    {
        $this->usuario->mdlSet("idUsuario", $id);
        $registro = $this->usuario->mdlConsultar();
        return $registro;
    } // Fin del metodo consultar

    public function ctrEliminar($id)
    {
        $this->usuario->mdlSet("idUsuario", $id);
        $this->usuario->mdlEliminar();
    } // Fin del metodo eliminar

    public function ctreditar($id, $cedula, $nombre, $apellidos, $usuario, $password)
    {
        $this->usuario->mdlSet("idUsuario", $id);
        $this->usuario->mdlSet("cedula", $cedula);
        $this->usuario->mdlSet("nombres", $nombre);
        $this->usuario->mdlSet("apellidos", $apellidos);
        $this->usuario->mdlSet("usuario", $usuario);
        $this->usuario->mdlSet("password", $password);

        return $this->usuario->mdlEditar();
    } // Fin del metodo editar

} // Fin de la clase

?>