<?php

    class Producto {
        public $base;

        function __construct($basedatos) {
            $this->base = $basedatos;
        }

        function listar_productos() {
            $query = $this->base->ejecutarQuery("SELECT * FROM productos");
            return $query;
        }
    }
?>