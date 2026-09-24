<?php
spl_autoload_register(function ($class_name) {
    $ruta = "./" . str_replace("\\", "/", $class_name) . ".php";
    // print_r($ruta);
    if (file_exists($ruta)) {
        require $ruta;
    }
});
