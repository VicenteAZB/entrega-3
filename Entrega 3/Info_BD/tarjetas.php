<?php
    include("../conex.inc"); // Incluye el archivo de conexión a la base de datos, que probablemente contiene la información de conexión.

    echo "<br>" . 'TARJETAS GRÁFICAS:'; // Muestra un título "TARJETAS GRÁFICAS" en la página.

    $query = "SELECT * FROM TarjetasGraficas"; // Crea una consulta SQL para seleccionar todos los registros de la tabla "TarjetasGraficas".
    $result = $conexion->query($query); // Ejecuta la consulta en la base de datos y almacena el resultado en la variable $result.

    while ($row = $result->fetch_assoc()) { // Itera a través de los resultados obtenidos de la consulta.
        echo "<li>" . 'Marca: ' . $row['Marca'] . ' ----> Modelo: ' . $row['Modelo']  . ' ----> Memoria de video: ' . $row['VRAM'] . 'GB ----> Tipo de memoria: ' . $row['TipoMemoria'] . "</li>";
        // Muestra los detalles de cada tarjeta gráfica, incluyendo la marca, modelo, cantidad de memoria de video y tipo de memoria.
    }

    $conexion->close(); // Cierra la conexión a la base de datos para liberar recursos.
?>
