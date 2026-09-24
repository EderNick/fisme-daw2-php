<?php
require "config/Autolod.php";

use \bo\Persona as PersonaBO;

$personasBO = new PersonaBO();
$arrPersonas = $personasBO->obtenerPersonas();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Personas</title>
</head>

<body>

    <h3>Listado de Personas</h3>
    <table border=1>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrPersonas as $p) : ?>
                <tr>
                    <td><?= $p->getNombre(); ?></td>
                    <td><?= $p->getApellido(); ?></td>
                    <td><?= $p->getEdad(); ?></td>
                    <td>Editar | Borrar</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>