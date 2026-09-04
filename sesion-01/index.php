<?php
//echo "Hola Mundo";
//print "Hola Mundo";
$nombre = "Eder";
$edad = 20;
$direccion = "Calle 123";

$arrNotas = [13, 15, 12.5, 10, 17]; //PHP los arreglos son colecciones de datos, pueden ser de diferentes tipos, no necesariamente del mismo tipo

$arrHeterogeneo = ["Eder", 20, "Calle 123", false , ["yape", "plin", "sip"] ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introducción a PHP</title>
</head>
<body>
    
    <h1>Bienvenidos</h1>
    <p>Nombre:  <?php echo $nombre; ?> </p>
    <p>Edad:  <?php echo $edad; ?> </p>
    <p>Dirección:  <?php echo $direccion; ?> </p>

    <p>Notas:  <?php var_dump($arrNotas); ?> </p>

    <pre><?php var_dump($arrHeterogeneo); ?>
    </pre>

    <h3>Mis Billeteras Digitales:</h3>
    <!-- <p>
        <?php //echo  implode("---", $arrHeterogeneo[4]); ?>
    </p> -->

    <ol>
        <?php 
        foreach ($arrHeterogeneo[4] as $elem) {
            echo "<li>$elem</li>\n";
        } 
        ?>
    </ol>

    <h3>Mis Notas y Promedio</h3>
    <ul>
        <?php 
        $suma = 0;
        foreach ($arrNotas as $nota) {
            echo "<li>$nota</li>\n";
            $suma += $nota;
        } 
        $promedio = $suma / count($arrNotas);
        ?>
    </ul>
    <?php echo "<p><b>Promedio: $promedio</b></p>"; ?>
    
    <a href="arreglos_obj.php">Ver más sobre Arreglos y Objetos</a>




</body>
</html>