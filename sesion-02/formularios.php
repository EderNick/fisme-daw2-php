<?php
/*$tiene_error = false;
if (isset($_GET["error"])) {
    $tiene_error = $_GET["error"]; // "si"
}*/
$tiene_error = $_GET["error"] ?? false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios con PHP</title>
</head>

<body>

    <h1>Iniciar Sesion</h1>
    <form action="./procesa_form.php" method="POST">
        <label for="usuario">Usuario:</label>
        <input type="text" name="txtUsuario" id="usuario" required>
        <br>

        <label for="clave">Contraseña:</label>
        <input type="password" name="txtClave" id="clave" required>
        <br>

        <input type="submit" value="Ingresar">

    </form>

    <?php if ($tiene_error): ?>
        <small style="color:red;">Error al ingresar sus credenciales.</small>
    <?php endif ?>

</body>

</html>