<?php
    include("../conex.inc"); // Incluye el archivo de conexión a la base de datos, que probablemente contiene la información de conexión.

    echo "<br>" . 'FUENTES DE PODER:'; // Muestra un título "FUENTES DE PODER" en la página.

    $query = "SELECT * FROM FuentesDePoder"; // Crea una consulta SQL para seleccionar todos los registros de la tabla "FuentesDePoder".
    $result = $conexion->query($query); // Ejecuta la consulta en la base de datos y almacena el resultado en la variable $result.

    while ($row = $result->fetch_assoc()) { // Itera a través de los resultados obtenidos de la consulta.
        echo "<li>" . 'Marca: ' . $row['Marca'] . ' ----> Modelo: ' . $row['Modelo'] . ' ----> Capacidad: ' . $row['Capacidad'] . ' Watts ----> Certificación: ' . $row['Eficiencia'] . "</li>";
        // Muestra los detalles de cada fuente de poder, incluyendo la marca, modelo, capacidad en watts y la certificación de eficiencia.
    }

    $conexion->close(); // Cierra la conexión a la base de datos para liberar recursos.
?>
