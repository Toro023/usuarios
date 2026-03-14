<?php
$controlador = new ControladorProductos();
if (isset($_GET["id"])) { // isset se refiere a si existe el dato id
    $registro = $controlador->ctrConsultar($_GET["id"]);
}

if (isset($_POST["editarRegistro"])) {
    $controlador->ctrEditar($_GET["id"],$_POST["nombre"], $_POST["descripcion"], $_POST["precio"], $_POST["stock"], $_POST["categoria"]);
    header("Location: index.php");
}
?>

<form action="" method="post">
    <label for="">Nombre</label><br>
    <input type="text" name="nombre" value="<?php echo $registro['nombre'] ?>" readonly><br><br>

    <label for="">descripcion</label><br>
    <input type="text" name="descripcion" value="<?php echo $registro['descripcion'] ?>"><br><br>

    <label for="">Precio</label><br>
    <input type="number" name="precio" value="<?php echo $registro['precio'] ?>"><br><br>

    <label for="">Stock</label><br>
    <input type="number" name="stock" value="<?php echo $registro['stock'] ?>"><br><br>

    <label for="">Categoria</label><br>
    <input type="text" name="categoria" value="<?php echo $registro['categoria'] ?>"><br><br>

    <input type="submit" name="editarRegistro" value="Editar">
</form>
<h1>MODULO EDITAR</h1>