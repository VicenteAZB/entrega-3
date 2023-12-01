<?php
    session_start();
    include("header.php"); // Inclusión del archivo "header.php" mediante PHP, que se usa para agregar contenido común en varias páginas.
?>
<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con especificación del idioma español -->
<head> <!-- Inicio del encabezado del documento HTML -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista y escala inicial para dispositivos móviles -->
    <meta name="robots" content="index, follow"> <!-- Instrucciones para los motores de búsqueda -->
    <meta name="description" content="Quienes somos, historia, equipo"> <!-- Descripción del contenido de la página -->
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css"> <!-- Enlace a una hoja de estilos CSS externa para esta página -->
    <title>Quienes somos</title> <!-- Título de la página que se muestra en la pestaña del navegador -->
</head> <!-- Fin del encabezado del documento HTML -->
<body> <!-- Inicio del cuerpo del documento HTML -->
    <h1>Quienes somos</h1> <!-- Encabezado de nivel 1 que indica "Quienes somos" -->
    <table> <!-- Inicio de una tabla HTML -->
        <tr> <!-- Fila de la tabla -->
            <th>EQUIPO</th> <!-- Encabezado de columna para "EQUIPO" -->
        </tr> <!-- Fin de la fila de la tabla -->
        <tr> <!-- Otra fila de la tabla -->
            <td> <!-- Celda de la tabla -->
                <ol class="Equipo"> <!-- Lista ordenada con una clase "Equipo" -->
                    <li id="vicente">Vicente Andrés Álvarez Barrenechea</li> <!-- Elemento de lista con un nombre -->
                    <li id="juan">Juan Francisco Muñoz Veloso</li> <!-- Elemento de lista con un nombre -->
                </ol> <!-- Fin de la lista ordenada -->
                <p>(Haga click en algún nombre para ver como es persona)</p>
            </td> <!-- Fin de la celda de la tabla -->
        </tr> <!-- Fin de la segunda fila de la tabla -->
    </table> <!-- Fin de la tabla HTML -->
    <div class="imagen-container">
        <img id="rostro">
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./Scripts/script3.js"></script> <!-- Inclusión de un archivo de script JavaScript llamado "script1.js" -->
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->
