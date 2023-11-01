<?php
    include("recursos.php");

    $carrito->introducir_compra($_GET["cod"], $_GET["prod"], $_GET["desc"], $_GET["pre"]);

    header("Location: unidad7.php");
?>