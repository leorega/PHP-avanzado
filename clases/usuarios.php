<?php 

    date_default_timezone_set("America/Argentina/Buenos_Aires");

    class Usuarios {
        private $nombre;
        private $apellido;
        private $fecha_nacimiento;

        function __construct($name, $last, $date) {
            $this->nombre = $name;
            $this->apellido = $last;
            $this->fecha_nacimiento = $date;
        }

        private function calcular_edad($fecha_nac) {
            $fecha_actual = date("d-m-Y");
            $calculo_edad = strtotime($fecha_actual) - strtotime($fecha_nac);
            $edad = floor($calculo_edad/(365 * 24 * 60 * 60));
            return $edad;
        }

        public function imprime_caracteristicas() {
            $edad = $this -> calcular_edad($this->fecha_nacimiento);
            echo "<p>La persona llamada ".$this->nombre." ".$this->apellido.", tiene ".$edad." años.</p>"; 
        }
    
    }
?>