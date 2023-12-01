<?php
session_start();
    if(!isset($_SESSION['idusuario'])){
        echo '
            <script>
                alert("Debes iniciar sesión para poder contactarnos");
                window.location = "registro_y_sesión.php";
            </script>
        ';
        session_destroy();
        die();
    }
    include("header.php");
?>
<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con especificación del idioma español -->
<head> <!-- Inicio del encabezado del documento HTML -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista y escala inicial para dispositivos móviles -->
    <meta name="robots" content="index, follow"> <!-- Instrucciones para los motores de búsqueda -->
    <meta name="description" content="Contacto"> <!-- Descripción del contenido de la página -->
    <link rel="stylesheet" href="CSS/contacto.css"> <!-- Enlace a una hoja de estilos CSS externa para esta página -->
    <title>Contacto</title> <!-- Título de la página que se muestra en la pestaña del navegador -->
</head> <!-- Fin del encabezado del documento HTML -->
<body> <!-- Inicio del cuerpo del documento HTML -->
    <section id="contacto"> <!-- Sección con un identificador "contacto" -->
        <h1>Contactanos</h1> <!-- Encabezado de nivel 1 que indica "Contacto" -->
        <form action="envio.php" method="post"> <!-- Formulario que envía datos al archivo "envio.php" utilizando el método POST -->
            <label for="nombre">Nombre:</label> <!-- Etiqueta del campo "nombre" del formulario -->
            <input type="text" id="nombre" name="nombre" placeholder="Ej: Juan Pérez" required><br> <!-- Campo de entrada de texto para el nombre -->
            <label for="mensaje">Mensaje:</label><br> <!-- Etiqueta del campo "mensaje" del formulario -->
            <textarea id="mensaje" name="mensaje" placeholder="Deja tu mensaje" rows="8" cols="40" required></textarea><br> <!-- Área de texto para el mensaje -->
            <input id ="btn" type="submit" value="Enviar"> <!-- Botón de envío del formulario -->
        </form> <!-- Fin del formulario -->
    </section> <!-- Fin de la sección "contacto" -->
    <div class="reviews">
        <button id="reseñas">Ver mensajes de otros usuarios</button>
        <h2>Mensajes de otros usuarios</h2>
        <ul id="reviewsList"></ul>
    </div>
    <div id="botones">
    <button><a href="formulario_borrar_cuenta.php">Eliminar cuenta</a></button>
    <button><a href="formulario_modificar_mensaje.php">Modificar mensaje</a></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./Scripts/mostrar_contactaciones.js"></script>
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->


