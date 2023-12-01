<?php
    session_start(); // Inicia la sesión para gestionar variables de sesión.
    include("header.php"); // Inclusión del archivo "header.php" mediante PHP, que se usa para agregar contenido común en varias páginas.
?>
<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con especificación del idioma español -->
<head> <!-- Inicio del encabezado del documento HTML -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista y escala inicial para dispositivos móviles -->
    <meta name="robots" content="index, follow"> <!-- Instrucciones para los motores de búsqueda -->
    <meta name="description" content="Productos y Servicios"> <!-- Descripción del contenido de la página -->
    <link rel="stylesheet" type="text/css" href="CSS/productosyservicios.css"> <!-- Enlace a una hoja de estilos CSS externa para esta página -->
    <title>Productos y Servicios</title> <!-- Título de la página que se muestra en la pestaña del navegador -->
</head> <!-- Fin del encabezado del documento HTML -->
<body> <!-- Inicio del cuerpo del documento HTML -->
    <h1>INFORMACIÓN</h1> <!-- Encabezado de nivel 1 -->

    <table> <!-- Inicio de una tabla HTML -->
        <tr> <!-- Fila de la tabla -->
            <th>PRODUCTOS</th> <!-- Encabezado de columna para "PRODUCTOS" con estilo de borde -->
            <th>SERVICIOS</th> <!-- Encabezado de columna para "SERVICIOS" con estilo de borde -->
        </tr> <!-- Fin de la fila de la tabla -->
        <tr> <!-- Otra fila de la tabla -->
            <td> <!-- Celda de la tabla con estilo de borde -->
                <p id="placa-madre"><b>Placa madre:</b></p>
                <hr>
                <p id="tarjeta-grafica"><b>Tarjeta gráfica:</b></p>
                <hr>
                <p id="memoria-ram"><b>Memoria RAM:</b></p>
                <hr>
                <p id="procesador"><b>Procesador:</b> </p>
                <hr>
                <p id="fuente-de-poder"><b>Fuente de poder:</b></p>
            </td> <!-- Fin de la celda de la tabla -->
            <td> <!-- Otra celda de la tabla con estilo de borde -->
                <p>Estamos comprometidos a brindar las mejores soluciones de información de componentes a la comunidad global de electrónica. Nuestra misión es facilitar la información tecnológica al proporcionar el conocimiento necesario para decir qué productos electrónicos son compatibles y confiables para los computadores.</p>
                <p>Agradecemos a nuestros clientes, socios y al equipo de "Turbo Pc" por ser parte de nuestra historia y esperamos seguir siendo su socio confiable en el mundo de la tecnología y los componentes electrónicos.</p>
            </td> <!-- Fin de la celda de la tabla -->
        </tr> <!-- Fin de la segunda fila de la tabla -->
    </table> <!-- Fin de la tabla HTML -->
    <table>
        <tr>
            <td>
            <p id="info">Información:</p>
            </td>
        </tr>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!-- Script para cargar la biblioteca jQuery desde un servidor externo -->
    <script src="./Scripts/script2.js"></script> <!-- Inclusión de un archivo de script JavaScript llamado "script1.js" -->
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->


