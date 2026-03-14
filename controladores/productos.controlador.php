<?php
include_once("modelos/modelo.productos.php");
class ControladorProductos
{
    private $producto;

    public function __construct()
    {
        $this->producto = new mdlProductos();
    }

    public function ctrListar()
    {
        $listar = $this->producto->mdlListar();
        return $listar;
    }

    public function ctrCrear($nombre, $descripcion, $precio, $stock, $categoria)
    {
        $this->producto->mdlSet("nombre", $nombre);
        $this->producto->mdlSet("descripcion", $descripcion);
        $this->producto->mdlSet("precio", $precio);
        $this->producto->mdlSet("stock", $stock);
        $this->producto->mdlSet("categoria", $categoria);

        $resultado = $this->producto->mdlCrear();
        return $resultado;
    } // Fin del metodo crear

    public function ctrConsultar($id)
    {
        $this->producto->mdlSet("idProducto", $id);
        $registro = $this->producto->mdlConsultar();
        return $registro;
    } // Fin del metodo consultar

    public function ctrEliminar($id)
    {
        $this->producto->mdlSet("idProducto", $id);
        $this->producto->mdlEliminar();
    } // Fin del metodo eliminar

    public function ctreditar($id, $nombre, $descripcion, $precio, $stock, $categoria)
    {
        $this->producto->mdlSet("idProducto", $id);
        $this->producto->mdlSet("nombre", $nombre);
        $this->producto->mdlSet("descripcion", $descripcion);
        $this->producto->mdlSet("precio", $precio);
        $this->producto->mdlSet("stock", $stock);
        $this->producto->mdlSet("categoria", $categoria);

        return $this->producto->mdlEditar();
    } // Fin del metodo editar

} // Fin de la clase

?>