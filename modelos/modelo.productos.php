<?php
include_once("connection.php");

class mdlProductos
{
    /* atributos */
    private $idProducto;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $categoria;
    private $con;

    /* metodos */
    public function __construct()
    {
        $this->con = new Conexion();
    } // Fin del constructor

    public function mdlListar()
    {
        $sql = "SELECT * FROM productos";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function mdlSet($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function mdlCrear()
    {
        $sql2 = "SELECT * FROM productos WHERE nombre='$this->nombre'";
        
        $resultado = $this->con->consultaRetorno($sql2);
        $filas = mysqli_num_rows($resultado);
        if ($filas == 0) {
            $sql = "INSERT INTO productos(nombre, descripcion, precio, stock, categoria) VALUES('$this->nombre',
             '$this->descripcion', '$this->precio', '$this->stock', '$this->categoria')";
            $this->con->consultaSimple($sql);
            return true;
        } else {
            return false;
        }
    }

    public function mdlConsultar()
    {
        $sql = "SELECT * FROM productos WHERE idProducto='$this->idProducto'";
        $resultado = $this->con->consultaRetorno($sql);
        $registro = mysqli_fetch_assoc($resultado); // "assoc" Convierte el resultado en un arreglo asociativo
        $this->idProducto = $registro["idProducto"];
        $this->nombre = $registro["nombre"];
        $this->descripcion = $registro["descripcion"];
        $this->precio = $registro["precio"];
        $this->stock = $registro["stock"];
        $this->categoria = $registro["categoria"];
        return $registro;
    }

    public function mdlEliminar()
    {
        $sql = "DELETE FROM productos WHERE idProducto='$this->idProducto'";
        $this->con->consultaSimple($sql);
    }

    public function mdlEditar()
    {

        $sql = "UPDATE productos SET nombre='$this->nombre', descripcion='$this->descripcion',

         precio='$this->precio', stock='$this->stock', categoria='$this->categoria' WHERE idProducto='$this->idProducto'";
        
        $this->con->consultaSimple($sql);
        
    }

}// Fin de la clase productos

$miProducto = new mdlProductos();
$miProducto->mdlListar();
?>