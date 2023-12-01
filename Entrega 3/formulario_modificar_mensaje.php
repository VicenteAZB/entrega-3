<?php
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
    include 'header.php'
    ?>
    <h2>Seleccione el id del mensaje que desea modificar:</h2>
    <?php
    include("conex.inc");
    $idusuario = $_SESSION['idusuario'];
    
    $query = "SELECT * FROM mensajes WHERE idusuario = ?";
    $stmt = $conexion->prepare($query);
    
    $stmt->bind_param("i", $idusuario);
    
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {      
        echo "<li id='mensaje-1'>" . 'ID: ' . $row['idmensaje'] . '<br>' .' Mensaje: ' . $row['Mensaje'] . "</li>";
    }
    
    
    $stmt->close();

   ?>

    <form action="modificar_mensajes.php" method="POST">
            <input type="number" placeholder="ID" name="idmensaje" required><br>
            <textarea id="mensaje" name="nuevo_mensaje" rows="8" cols="40" required></textarea> 
            <button id="update">Actualizar mensaje</button>
    </form>
</body>
</html>