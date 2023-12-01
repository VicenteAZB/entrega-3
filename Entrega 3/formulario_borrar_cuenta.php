<?php
// Inicia la sesión para gestionar variables de sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/formularios.css"> <!-- Enlace a una hoja de estilos CSS externa para esta página -->
    <title>Borrar cuenta</title>
</head>
<body>
    <?php
    // Incluye el encabezado de la página desde 'header.php'
    include 'header.php';
    ?>
    <!-- Formulario para borrar la cuenta -->
    <form action="borrar_cuenta.php" method="POST">
        <h2>Borrar cuenta</h2>
        <!-- Campos para ingresar correo y contraseña -->
        <input type="email" placeholder="Ingrese su correo electrónico" name="correo" required>
        <input type="password" class="passwrd" id="InputPassLogin" placeholder="Ingrese su contraseña" name="password" required>
        <!-- Botón para enviar el formulario y borrar la cuenta -->
        <button id="Delete">Eliminar cuenta</button>
    </form>
</body>
</html>
