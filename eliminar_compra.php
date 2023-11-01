<?php 
    include("recursos.php");

    $carrito->eliminar_compra($_POST["compra_id"]);

    header("Location: unidad7.php");
?>