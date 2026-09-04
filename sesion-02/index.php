<?php
$arrArchivos = [
    "index",
    "operadores",
    "control_de_flujo",
    "funciones",
    "formularios"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesion 02 - PHP</title>
</head>

<body>

    <h2>Menú</h2>
    <ul>
        <?php
        foreach ($arrArchivos as $file) {
            echo "<li><a href='$file.php'>" . str_replace("_", "  ", ucfirst($file)) . "</a></li>";
        }
        ?>
    </ul>

</body>

</html>