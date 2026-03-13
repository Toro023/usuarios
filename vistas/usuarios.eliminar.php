<?php
$controlador = new ControladorUsuarios();

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
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cedula</th>
            <th>Usuario</th>
            <th>Password</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $registro['idUsuario'] ?>
                </td>
                <td>
                    <?php echo $registro['nombres'] ?>
                </td>
                <td>
                    <?php echo $registro['apellidos'] ?>
                </td>
                <td>
                    <?php echo $registro['cedula'] ?>
                </td>
                <td>
                    <?php echo $registro['usuario'] ?>
                </td>
                <td>
                    <?php echo $registro['password'] ?>
                </td>
                <td>
                    <input type="submit" name="eliminarRegistro" value="Eliminar">
                </td>
            </tr>
        </tbody>
    </table>
</form>

<h1>MODULO ELIMINAR</h1>