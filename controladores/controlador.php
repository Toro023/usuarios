<?php
include_once("modelos/usuarios.php");
class ControladorUsuarios{
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

}

?>