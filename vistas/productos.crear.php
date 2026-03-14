<h1>Agregar un nuevo producto</h1>

<form action="" method="post">
    <label for="">Nombre</label><br>
    <input type="text" name="nombre" required><br><br>

    <label for="">Descripcion</label><br>
    <input type="text" name="descripcion" required><br><br>

    <label for="">Precio</label><br>
    <input type="number" name="precio" required><br><br>

    <label for="">Stock</label><br>
    <input type="number" name="stock" required><br><br>

    <label for="">Categoria</label><br>
    <input type="text" name="categoria" required><br><br>

    <input type="submit" name="enviarRegistroProductos" value="Registrar">
</form>

<?php
$controlador = new ControladorProductos();
if (isset($_POST["enviarRegistroProductos"])) {
    // Metodo para crear el producto
    $resultado = $controlador->ctrCrear($_POST["nombre"], $_POST["descripcion"], $_POST["precio"], $_POST["stock"], $_POST["categoria"]);
    if ($resultado) {
        echo "Registro agregado satisfactoriamente";
    }else{
        echo "Este producto ya esta registrado";
    }

}
?>