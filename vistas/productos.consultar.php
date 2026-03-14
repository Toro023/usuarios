<?php

    $controlador = new ControladorProductos();
   
    if (isset($_GET["id"]))
        $registro = $controlador->ctrConsultar($_GET["id"])
?>

<h1>MODULO CONSULTAR</h1>

<p>Nombre: <?php echo $registro['nombre']; ?></p>
<p>Descripción: <?php echo $registro['descripcion']; ?></p>
<p>Precio: <?php echo $registro['precio']; ?></p>
<p>Stock: <?php echo $registro['stock']; ?></p>
<p>Categoría: <?php echo $registro['categoria']; ?></p>