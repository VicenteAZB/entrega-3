<?php
    include("../conex.inc"); // Incluye el archivo de conexión a la base de datos, que probablemente contiene la información de conexión.

    echo "<br>" . 'MEMORIAS RAM:'; // Muestra un título "MEMORIAS RAM" en la página.

    $query = "SELECT * FROM MemoriasRAM"; // Crea una consulta SQL para seleccionar todos los registros de la tabla "MemoriasRAM".
    $result = $conexion->query($query); // Ejecuta la consulta en la base de datos y almacena el resultado en la variable $result.

    while ($row = $result->fetch_assoc()) { // Itera a través de los resultados obtenidos de la consulta.
        echo "<li>" . 'Marca: ' . $row['Marca'] . ' ----> Capacidad: ' . $row['Capacidad'] . 'GB ----> Tipo: ' . $row['Tipo'] . "</li>";
        // Muestra los detalles de cada memoria RAM, incluyendo la marca, capacidad en gigabytes (GB) y tipo.
    }

    $conexion->close(); // Cierra la conexión a la base de datos para liberar recursos.
?>
