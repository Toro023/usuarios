<?php
class Enrutador{

    public function cargarVista($vista)
    {
        switch($vista)
        {
            case "crear":
                include_once("vistas/productos.crear.php");
                break;
                
            case "consultar":
                include_once("vistas/productos.consultar.php");
                break;

            case "editar":
                include_once("vistas/productos.editar.php");
                break;

            case "eliminar":
                include_once("vistas/productos.eliminar.php");
                break;

            default:
                include_once("vistas/error404.php");
        }
    } // Fin de cargar vista

    public function validarVista($variable)
    {
        if (empty($variable)){
            include_once("vistas/productos.inicio.php");

        }else{
            return True;
        }
    }
}


?>