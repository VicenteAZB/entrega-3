<?php
    // Incluye el archivo de conexión a la base de datos
    include("conex.inc");

    // Consulta todos los mensajes en la tabla 'mensajes'
    $query = "SELECT * FROM mensajes";
    $result = $conexion->query($query);

    // Itera sobre los resultados y muestra cada mensaje en un formato específico
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="review">
            <div class="review-user">'.$row['nombre'] .'</div>
            <div class="review-text">' .$row['Mensaje'] .'</div>
        </div> <br> <br>';
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
?>
