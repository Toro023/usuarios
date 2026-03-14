<?php
$controlador = new ControladorUsuarios();
if (isset($_GET["id"])) { // isset se refiere a si existe el dato id
    $registro = $controlador->ctrConsultar($_GET["id"]);
}

if (isset($_POST["editarRegistroUsuarios"])) {
    $controlador->ctrEditar($_GET["id"], $_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["password"]);
    header("Location: ?cargar=inicio_usuarios");
}
?>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $registro['idUsuario'] ?>" disabled><br><br>

    <label for="">Cedula</label><br>
    <input type="text" name="cedula" value="<?php echo $registro['cedula'] ?>" disabled><br><br>

    <label for="">Nombres</label><br>
    <input type="text" name="nombres" value="<?php echo $registro['nombres'] ?>"><br><br>

    <label for="">Apellidos</label><br>
    <input type="text" name="apellidos" value="<?php echo $registro['apellidos'] ?>"><br><br>

    <label for="">Usuario</label><br>
    <input type="text" name="usuario" value="<?php echo $registro['usuario'] ?>"><br><br>

    <label for="">Clave</label><br>
    <input type="text" name="password" value="<?php echo $registro['password'] ?>"><br><br>

    <input type="submit" name="editarRegistroUsuarios" value="Editar">
</form>
<h1>MODULO EDITAR</h1>