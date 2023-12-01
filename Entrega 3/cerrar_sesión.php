<?php
    // Inicia la sesión
    session_start();

    // Destruye la sesión, eliminando todas las variables de sesión
    session_destroy();

    // Redirige al usuario a la página "index.php"
    header("location: index.php");
?>
