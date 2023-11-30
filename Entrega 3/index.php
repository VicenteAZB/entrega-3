<?php
    include("conex.inc"); // Inclusión de un archivo PHP llamado "conex.inc"
?>
<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html lang="es"> <!-- Inicio del elemento HTML con especificación del idioma espaí±ol -->
<head> <!-- Inicio del encabezado del documento HTML -->
    <meta charset="UTF-8"> <!-- Configuración de la codificación de caracteres a UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuración de la vista y escala inicial para dispositivos móviles -->
    <meta name="robots" content="index, follow"> <!-- Instrucciones para los motores de bíºsqueda -->
    <meta name="description" content="Descripción de la empresa"> <!-- Descripción del contenido de la página (nota: hay dos etiquetas de descripción, lo que podrí­a ser un error) -->
    <meta name="description" content="Home página Turbo PC"> <!-- Segunda descripción del contenido de la página -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./CSS/estilo.css"> <!-- Enlace a una hoja de estilos CSS externa para esta página -->
    <title>Turbo PC</title> <!-- Tí­tulo de la página que se muestra en la pestaí±a del navegador -->
</head> <!-- Fin del encabezado del documento HTML -->
<body> <!-- Inicio del cuerpo del documento HTML -->
    <?php
        include("header.php"); // Inclusión del archivo "header.php" mediante PHP, que se usa para agregar contenido comíºn en varias páginas.
    ?>
    <main class="p-2"> <!-- Elemento principal de la página -->
        <div class="text-center">
            <div class="text-center"id="Cuadro1"> <!-- Div con un identificador "Cuadro1" -->
                <article> <!-- Elemento "article" que contiene información sobre Turbo PC -->
                    <h1><b>Turbo PC</b></h1> <!-- Encabezado de nivel 1 con texto en negrita -->
                    <p>¡Encuentra aquí­ los componentes para tu PC!</p> <!-- Párrafo con un mensaje sobre la bíºsqueda de componentes para PC -->
                </article>
            </div>
            <div id="Cuadro2"> <!-- Div con un identificador "Cuadro2" -->
                <article> <!-- Elemento "article" que contiene información sobre la creación de un PC personalizado -->
                    <h1><b>Crea tu propio PC</b></h1> <!-- Encabezado de nivel 1 con texto en negrita -->
                    <p>Te invitamos a crear tu nuevo PC con los componentes disponibles en Turbo PC.</p> <!-- Párrafo invitando a crear un PC personalizado -->
                </article>
            </div>
        </div>
        <div class="text-center "id="Diagrama"> <!-- Div con un identificador "Diagrama" -->
            <p id="descripcion">Componentes</p> <!-- Párrafo con un identificador "descripcion" -->
            <img id="Procesador" src="./Imágenes/Procesador.jpg" alt="Imágenes de Procesadores Intel y AMD">
            <img id="Tarjeta" src="./Imágenes/Tarjeta%20Gráfica.webp" alt="Imágenes de Tarjetas Gráficas Nvidia y AMD Radeon">
            <img id="Placa" src="./Imágenes/Placa%20Base.webp" alt="Imagen de placa base">
            <img id="Ram" src="./Imágenes/Ram.jpg" alt="Imagen de memoria RAM">
            <img id="Fuente" src="./Imágenes/Fuente.jpg" alt="Imagen de fuente de poder">
        </div>
    </main>
    <div id="productos"> <!-- Div con un identificador "productos" -->
        <ul id="lista"> <!-- Lista no ordenada con un identificador "lista" -->
        </ul>
    </div>
    <script src="./Scripts/script.js"></script> <!-- Inclusión de un archivo de script JavaScript llamado "script.js" -->
</body> <!-- Fin del cuerpo del documento HTML -->
</html> <!-- Fin del documento HTML -->



