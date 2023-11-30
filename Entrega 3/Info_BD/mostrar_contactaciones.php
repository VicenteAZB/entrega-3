<?php
    include("conex.inc");
    $query = "SELECT * FROM mensajes";
    $result = $conexion->query($query);

    while ($row = $result->fetch_assoc()) {
    echo '
    <div class="review">
        <div class="review-user">'.$row['nombre'] .'</div>
        <div class="review-text">' .$row['Mensaje'] .'</div>
    </div> <br> <br>';

    }
$conexion->close();
?>
