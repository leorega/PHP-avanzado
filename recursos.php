<?php
include("clases/basededatos.php");
include("clases/producto.php");
include("clases/carrito.php");
include("clases/usuario.php");

define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASS', '');
define('BASE', 'phpavanzado');

$baseDatos = new BaseDeDatos(SERVIDOR, USUARIO, PASS, BASE);
$producto = new Producto($baseDatos);
$carrito = new Carrito($baseDatos);
$usuario = new Usuario($baseDatos);
?>