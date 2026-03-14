<?php
class Enrutador
{

    public function cargarVista($vista)
    {
        switch ($vista) {
            case "crear_producto":
                include_once("vistas/productos.crear.php");
                break;

            case "consultar_producto":
                include_once("vistas/productos.consultar.php");
                break;

            case "editar_producto":
                include_once("vistas/productos.editar.php");
                break;

            case "eliminar_producto":
                include_once("vistas/productos.eliminar.php");
                break;

            case "crear_usuario":
                include_once("vistas/usuarios.crear.php");
                break;

            case "consultar_usuario":
                include_once("vistas/usuarios.consultar.php");
                break;

            case "editar_usuario":
                include_once("vistas/usuarios.editar.php");
                break;

            case "eliminar_usuario":
                include_once("vistas/usuarios.eliminar.php");
                break;

            case "inicio_usuarios":
                include_once("vistas/usuarios.inicio.php");
                break;

            case "inicio_productos":
                include_once("vistas/productos.inicio.php");
                break;

            default:
                include_once("vistas/error404.php");
        }
    } // Fin de cargar vista

    public function validarVista($variable)
    {
        if (empty($variable)) {
            return False;

        } else {
            return True;
        }
    }
}


?>