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
    <?php
        include("header.php"); // Inclusión del archivo "header.php" mediante PHP, que se usa para agregar contenido común en varias páginas.
    ?>
    <h1> Quienes somos </h1> <!-- Encabezado de nivel 1 que indica "Quienes somos" -->
    <table> <!-- Inicio de una tabla HTML -->
        <tr> <!-- Fila de la tabla -->
            <th>HISTORIA</th> <!-- Encabezado de columna para "HISTORIA" -->
        </tr> <!-- Fin de la fila de la tabla -->
        <tr> <!-- Otra fila de la tabla -->
            <td> <!-- Celda de la tabla -->
                <p>La historia de <i>"Turbo Pc"</i> comienza en el año 2023, cuando un grupo de apasionados
                ingenieros informáticos y entusiastas de la tecnología se unieron para brindar la
                información del mercado de componentes electrónicos.</p><br>
                <p>En nuestro equipo Turbo Pc tenemos una visión compartida de simplificar y acelerar
                el acceso a información crítica sobre componentes electrónicos. Nuestros fundadores
                comenzaron a recopilar datos, especificaciones y hojas de datos de componentes de una
                amplia variedad de fabricantes. Su objetivo era crear una plataforma centralizada que
                brindara a los profesionales de la industria la información que necesitaban de manera
                rápida y confiable.</p>
            </td> <!-- Fin de la celda de la tabla -->
        </tr> <!-- Fin de la segunda fila de la tabla -->
    </table> <!-- Fin de la tabla HTML -->
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->
