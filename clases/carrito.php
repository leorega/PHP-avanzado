<?php

    class Carrito {
        public $base;

        function __construct($basedatos) {
            $this->base = $basedatos;
        }

        function listar_compra() {
            $query = $this->base->ejecutarQuery("SELECT * FROM compras");
            return $query;
        }

        function introducir_compra($cod, $prod, $desc, $pre) {
            $query = $this->base->ejecutarQuery("INSERT INTO compras VALUES(DEFAULT, '$cod', '$prod', '$desc', '$pre')");
            return $query;
        }

        function eliminar_compra($id) {
            $query = $this->base->ejecutarQuery("DELETE FROM compras WHERE id_compra = $id");
            return $query;
        }
    }
?>