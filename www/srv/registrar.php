<?php
include "../class/Auth.php";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$Auth = new Auth();

if ($Auth->registrar($nombre, $email, $password)) {
    header("location:../index.php");
} else {
    echo "No se pudo registrar";
}
?>