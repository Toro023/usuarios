<?php
$controlador = new ControladorProductos();

if (isset($_GET["id"])) {
    $registro = $controlador->ctrConsultar($_GET["id"]);
}

if (isset($_POST["eliminarRegistro"])) {
    $controlador->ctrEliminar($_GET["id"]);
    header("Location: index.php");
}
?>


<form action="" method="POST">
    <table border="1">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $registro['idProducto'] ?>
                </td>
                <td>
                    <?php echo $registro['nombre'] ?>
                </td>
                <td>
                    <?php echo $registro['descripcion'] ?>
                </td>
                <td>
                    <?php echo $registro['precio'] ?>
                </td>
                <td>
                    <?php echo $registro['stock'] ?>
                </td>
                <td>
                    <?php echo $registro['categoria'] ?>
                </td>
                <td>
                    <input type="submit" name="eliminarRegistro" value="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
</form>

<h1>MODULO ELIMINAR</h1>