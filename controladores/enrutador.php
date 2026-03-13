<?php
class Enrutador{

    public function cargarVista($vista)
    {
        switch($vista)
        {
            case "crear":
                include_once("vistas/usuarios.crear.php");
                break;
                
            case "consultar":
                include_once("vistas/usuarios.consultar.php");
                break;

            case "editar":
                include_once("vistas/usuarios.editar.php");
                break;

            case "eliminar":
                include_once("vistas/usuarios.eliminar.php");
                break;

            default:
                include_once("vistas/usuarios.error404.php");
        }
    } // Fin de cargar vista

    public function validarVista($variable)
    {
        if (empty($variable)){
            include_once("vistas/inicio.php");

        }else{
            return True;
        }
    }
}


?>