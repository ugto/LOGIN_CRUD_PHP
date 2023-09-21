<?php
    include "Conexion.php";

    class Auth extends Conexion {

        public function registrar($nombre,$email, $password) {
            $conexion = parent::conectar();
            $sql = "INSERT INTO prueba.usuarios (nombre,email, password) 
                    VALUES (?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('sss', $nombre, $email, $password);
            return $query->execute();
        }
    }
?>