<?php
 class Conexion {
    public $servidor = 'db';
    public $usuario = 'root';
    public $password = 'clave';
    public $database = 'prueba';
    public $port = 3306;

    public function conectar() {
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database,
            $this->port
        );
    }
}

?>