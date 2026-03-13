<?php
$controlador = new ControladorUsuarios();
$resultado = $controlador->ctrListar();
?>

<table border="1">
    <thead>
        <tr>
            <th>IdUsuario</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($fila = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $fila['idUsuario'] . "</td>";
            echo "<td>" . $fila['nombres'] . "</td>";
            echo "<td>" . $fila['apellidos'] . "</td>";
            echo "<td>" . $fila['cedula'] . "</td>";
            echo "<td>" . $fila['usuario'] . "</td>";
            echo "<td>" . $fila['password'] . "</td>";
            echo "<td>
            <a href='?cargar=consultar&id=" . $fila["idUsuario"] .
                "'>|Consultar|</a><a href='?cargar=editar&id=" . $fila["idUsuario"] .
                "'>Editar|</a><a href='?cargar=eliminar&id=" . $fila["idUsuario"] .
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