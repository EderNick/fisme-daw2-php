<?php

$usuario_bd = "admin@admin.com";
$clave_bd  = "1234";
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";

$usuario = $_POST["txtUsuario"];
$clave = $_POST["txtClave"];

// print "Usuario:" . $usuario;
// echo "<br>";
// print "Clave:" . $clave;

if ($usuario === $usuario_bd && $clave === $clave_bd) {
    //echo "Bienvenido al sistema";
    header("Location: ./intranet/index.php");
} else {
    // echo "Credenciales incorrectas";
    header("Location: ./formularios.php?error=si");
}
