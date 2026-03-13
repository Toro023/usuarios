<h1>Agregar un nuevo usuario</h1>

<form action="" method="post">
    <label for="">Cedula</label><br>
    <input type="text" name="cedula" required><br><br>

    <label for="">Nombres</label><br>
    <input type="text" name="nombres" required><br><br>

    <label for="">Apellidos</label><br>
    <input type="text" name="apellidos" required><br><br>

    <label for="">Usuario</label><br>
    <input type="text" name="usuario" required><br><br>

    <label for="">Clave</label><br>
    <input type="text" name="password" required><br><br>

    <input type="submit" name="enviarRegistro" value="Registrar">
</form>

<?php
$controlador = new ControladorUsuarios();
if (isset($_POST["enviarRegistro"])) {
    // Metodo para crear el usuario
    $resultado = $controlador->crear($_POST["cedula"], $_POST["nombres"], $_POST["apellidos"], $_POST["usuario"], $_POST["password"]);
    if ($resultado) {
        echo "Registro agregado satisfactoriamente";
    }else{
        echo "Esta cedula ya esta registrada";
    }

}
?>