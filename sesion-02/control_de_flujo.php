<?php
$usuario_bd = "admin";
$clave_bd = "1234";

$usuario_ingresado = "admin";
$clave_ingresada = "1234";

if ($usuario_bd === $usuario_ingresado) {
    echo "Usuario correcto <br>";
} else {
    echo "Usuario incorrecto <br>";
}

if ($clave_bd === $clave_ingresada) {
    echo "Clave correcta <br>";
} else {
    echo "Clave incorrecta <br>";
}

if ($usuario_bd === $usuario_ingresado && $clave_bd === $clave_ingresada) {
    echo "BIENVENIDO AL SISTEMA <br>";
} else {
    echo "Credenciales incorrectas. <br>";
}

$var = 0;
while ($var < 10) {
    echo "procesando While... <br>";
    $var++;
}

for ($i = 0; $i < 10; $i++) {
    echo "procesando For... <br>";
}

/*foreach ($arrArchivos as $file) {
    echo "procesando ForEach... <br>";
}*/


/*do {
    # code...
} while ($a <= 10);*/
