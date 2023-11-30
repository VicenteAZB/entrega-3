<?php
session_start();
include 'conex.inc';
// Verifica si el usuario está autenticado
if (!isset($_SESSION['idusuario'])) {
    header("location: registro_y_sesión.php"); // Redirige a la página de inicio de sesión si el usuario no está autenticado
    exit;
}
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$idusuario = $_SESSION['idusuario'];

// Utiliza una sentencia preparada para evitar la inyección SQL
$query = "INSERT INTO mensajes (nombre, mensaje, idusuario) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conexion, $query);

// Vincula los parámetros
mysqli_stmt_bind_param($stmt, 'ssi', $nombre, $mensaje, $idusuario);

// Ejecuta la sentencia preparada
$ejecutar = mysqli_stmt_execute($stmt);

if ($ejecutar) {
    echo '
        <script>
            alert("Mensaje enviado exitosamente");
            window.location = "Contacto.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error al enviar el mensaje");
            window.location = "Contacto.php";
        </script>
    ';
}

// Cierra la sentencia preparada
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
