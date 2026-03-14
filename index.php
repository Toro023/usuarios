<?php
    include_once("controladores/productos.controlador.php");
    include_once("controladores/enrutador.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>
    <h1>CRUD CON PHP Y POO EN MVC</h1>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="?cargar=crear">Registrar</a></li>
        </ul>
    </nav>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        if (!isset($_GET["cargar"])) {
            $_GET["cargar"] = "";
        }
        $cargar = "";
        $enrutador = new Enrutador();
        if ($enrutador->validarVista($_GET['cargar'])) // Capturamos variable por get especificando cual
        {
            $enrutador->cargarVista($_GET['cargar']);
        }
    ?>
</body>
</html>