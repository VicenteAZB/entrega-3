<?php
    include("../conex.inc"); // Incluye el archivo de conexión a la base de datos, que probablemente contiene la información de conexión.

    echo "<br>" . 'PROCESADORES:'; // Muestra un título "PROCESADORES" en la página.

    $query = "SELECT * FROM Procesadores"; // Crea una consulta SQL para seleccionar todos los registros de la tabla "Procesadores".
    $result = $conexion->query($query); // Ejecuta la consulta en la base de datos y almacena el resultado en la variable $result.

    while ($row = $result->fetch_assoc()) { // Itera a través de los resultados obtenidos de la consulta.
        echo "<li>" . 'Marca: ' . $row['Marca'] . ' ----> Modelo: ' . $row['Modelo'] . ' ----> Velocidad: ' . $row['Velocidad_reloj'] . 'Ghz' . "</li>";
        // Muestra los detalles de cada procesador, incluyendo la marca, modelo y velocidad de reloj en gigahertz (Ghz).
    }

    $conexion->close(); // Cierra la conexión a la base de datos para liberar recursos.
?>
