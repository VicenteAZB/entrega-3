<?php
// Inicia la sesión para gestionar variables de sesión
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./CSS/formularios.css"> <!-- Enlace a una hoja de estilos CSS externa para esta página -->
    <title>Modificar mensaje</title>
</head>
<body>
    <?php
    // Incluye el encabezado de la página desde 'header.php'
    include 'header.php';
    ?>
    <!-- Título secundario en HTML -->
    <h2>Seleccione el ID del mensaje que desea modificar:</h2>
    <?php
    // Incluye el archivo de conexión a la base de datos
    include("conex.inc");

    // Obtiene el ID del usuario de la sesión actual
    $idusuario = $_SESSION['idusuario'];
    
    // Prepara y ejecuta una consulta para obtener los mensajes del usuario actual
    $query = "SELECT * FROM mensajes WHERE idusuario = ?";
    $stmt = $conexion->prepare($query);
    
    // Vincula el parámetro del ID del usuario a la consulta preparada
    $stmt->bind_param("i", $idusuario);
    
    // Ejecuta la consulta preparada
    $stmt->execute();
    
    // Obtiene el resultado de la consulta
    $result = $stmt->get_result();
    
    // Itera a través de los resultados y muestra cada mensaje
    while ($row = $result->fetch_assoc()) {      
        echo "<li id='mensaje-1'>" . 'ID: ' . $row['idmensaje'] . '<br>' .' Mensaje: ' . $row['Mensaje'] . "</li>";
    }
    
    // Cierra la consulta preparada
    $stmt->close();
   ?>

    <!-- Formulario para modificar mensajes -->
    <form action="modificar_mensajes.php" method="POST">
            <!-- Campo de entrada para el ID del mensaje que se desea modificar -->
            <input type="number" placeholder="ID" name="idmensaje" required><br>
            <!-- Área de texto para ingresar el nuevo mensaje -->
            <textarea id="mensaje" name="nuevo_mensaje" rows="8" cols="40" required></textarea> 
            <!-- Botón para enviar el formulario y actualizar el mensaje -->
            <button id="update">Actualizar mensaje</button>
    </form>
</body>
</html>
