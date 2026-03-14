<?php

    $controlador = new ControladorProductos();
   
    if (isset($_GET["id"]))
        $registro = $controlador->ctrConsultar($_GET["id"])
?>

<h1>MODULO CONSULTAR</h1>

<p>Cedula: <?php echo $registro['nombre']; ?></p>
<p>Nombres: <?php echo $registro['descripcion']; ?></p>
<p>Apellidos: <?php echo $registro['precio']; ?></p>
<p>Usuario: <?php echo $registro['stock']; ?></p>
<p>Password: <?php echo $registro['categoria']; ?></p>