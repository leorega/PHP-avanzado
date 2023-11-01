<?php 

    class Usuario {
        public $base;

        function __construct($basedatos) {
            $this->base = $basedatos;
        }

        public function cargar_usuario($email, $pass) {
            $query = $this->base->ejecutarQuery("INSERT INTO registro VALUES('$email', '$pass')");
            return $query;
        }

        public function verificar_usuario($email) {
            $query = $this->base->ejecutarQuery("SELECT * FROM registro WHERE email = '$email'");
            return $query;
        }
    
    }
?>