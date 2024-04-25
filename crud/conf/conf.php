<?php
// Clase para gestionar la conexión a la base de datos
if (!class_exists('ConexionBD')) {
    class ConexionBD {
        private $server;
        private $usuario;
        private $contraseña;
        private $db;
        public $conexion;

        public function __construct($server, $usuario, $contraseña, $db) {
            $this->server = $server;
            $this->usuario = $usuario;
            $this->contraseña = $contraseña;
            $this->db = $db;
            $this->conexion = null;
        }

        public function conectar(){
            // Establecer la conexión con la base de datos
            $this->conexion = new mysqli($this->server, $this->usuario, $this->contraseña, $this->db);
            if ($this->conexion->connect_error){
                die("La conexión a la base de datos falló: " . $this->conexion->connect_error);
            } else {
                //echo "Conexión a la base de datos exitosa"; 
            }
        }

        public function desconectar(){
            // Cerrar la conexión con la base de datos
            if ($this->conexion === null){
                // No hay conexión para cerrar
            } else {
                $this->conexion->close();
                //echo "Se cerró la conexión";
            }  
        }
    }
}

// Instanciar la clase de conexión a la base de datos
$conexion = new ConexionBD('localhost', 'root', '', 'viajes');
?>
