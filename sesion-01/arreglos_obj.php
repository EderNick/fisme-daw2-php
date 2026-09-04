<?php

$estudiantes = [
    [
        "nombre"=>"Eder",
        "edad"=>20,
        "direccion"=>"Calle 123"
    ],
    [
        "nombre"=>"Juan",
        "edad"=>22,
        "direccion"=>"Calle 456"
    ],    
    [
        "nombre"=>"Maria",
        "edad"=>19,
        "direccion"=>"Calle 789"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos y Objetos</title>
</head>
<body>
    <h1>Arreglos y Objetos</h1>

    <ul>
        <?php
        foreach($estudiantes as $est) {
            echo "<li>" . 
                $est["nombre"] . 
                " tiene " . 
                $est["edad"] . 
                " años y vive en " . 
                $est["direccion"] .
            ".</li>\n";
        }
        ?>
    </ul>
</body>
</html>