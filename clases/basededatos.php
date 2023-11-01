<?php 
    class BaseDeDatos {
        private $conexion;

        function __construct($servidor, $usuario, $password, $base) {
            $this->conexion = new mysqli($servidor, $usuario, $password, $base);
        }

        public function ejecutarQuery($codSQL) {
            $mostrarInfo = array();
            $instruccionSQL = strtoupper(substr($codSQL, 0, 6));
            switch ($instruccionSQL) {
                case 'DELETE':
                case 'INSERT':
                case 'UPDATE': 
                    $consultaSQL = $this->conexion->query($codSQL);
                    break;
                case 'SELECT':
                    $consultaSQL = $this->conexion->query($codSQL);
                    while($listarDatos=$consultaSQL->fetch_assoc()) {
                        $mostrarInfo[] = $listarDatos;
                    }     
                    return $mostrarInfo;
                    break;
            }
        }
    }
?>