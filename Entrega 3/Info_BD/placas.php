<?php
    include("../conex.inc"); // Incluye el archivo de conexión a la base de datos, que probablemente contiene la información de conexión.

    echo "<br>" . 'PLACAS BASE:'; // Muestra un título "PLACAS BASE" en la página.

    $query = "SELECT * FROM PlacasBase"; // Crea una consulta SQL para seleccionar todos los registros de la tabla "PlacasBase".
    $result = $conexion->query($query); // Ejecuta la consulta en la base de datos y almacena el resultado en la variable $result.

    while ($row = $result->fetch_assoc()) { // Itera a través de los resultados obtenidos de la consulta.
        echo "<li>" . 'Marca: ' . $row['Marca'] . ' ----> Modelo: ' . $row['Modelo'] . ' ----> Tipo de socket: ' . $row['TipoSocket'] . ' ----> Memoria RAM compatible: ' . $row['SoporteRAM'] . "</li>";
        // Muestra los detalles de cada placa base, incluyendo la marca, modelo, tipo de socket y la memoria RAM compatible.
    }

    $conexion->close(); // Cierra la conexión a la base de datos para liberar recursos.
?>
