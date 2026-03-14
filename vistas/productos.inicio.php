<?php
$controlador = new ControladorProductos();
$resultado = $controlador->ctrListar();
?>

<table border="1">
    <thead>
        <tr>
            <th>idProducto</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['idProducto'] . "</td>";
            echo "<td>" . $fila['nombre'] . "</td>";
            echo "<td>" . $fila['descripcion'] . "</td>";
            echo "<td>" . $fila['precio'] . "</td>";
            echo "<td>" . $fila['stock'] . "</td>";
            echo "<td>" . $fila['categoria'] . "</td>";
            echo "<td>
            <a href='?cargar=consultar_producto&id=" . $fila["idProducto"] .
                "'>|Consultar|</a><a href='?cargar=editar_producto&id=" . $fila["idProducto"] .
                "'>Editar|</a><a href='?cargar=eliminar_producto&id=" . $fila["idProducto"] .
                "'>Eliminar|</a>
            </td>";
            echo "</tr>";
        }
        ?>
        <!-- <td>
            <a href="?cargar=consultar">Consultar</a> |
            <a href="?cargar=editar">Editar</a> |
            <a href="?cargar=eliminar">Eliminar</a>
        </td> -->
    </tbody>
</table>