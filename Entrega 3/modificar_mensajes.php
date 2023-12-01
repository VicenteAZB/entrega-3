<?php
session_start();
include 'conex.inc';

// Verifica si el usuario está autenticado
if (!isset($_SESSION['idusuario'])) {
    header("location: registro_y_sesión.php");
    exit;
}

// Verifica si se ha proporcionado un ID de mensaje válido
if (!isset($_POST['idmensaje']) || !is_numeric($_POST['idmensaje'])) {
    header("location: formulario_modificar_mensaje.php");
    exit;
}

$idusuario = $_SESSION['idusuario'];
$idmensaje = (int)$_POST['idmensaje']; // Convertir a entero para mayor seguridad

// Verifica si el usuario es el propietario del mensaje
$stmt = $conexion->prepare("SELECT * FROM mensajes WHERE idmensaje = ? AND idusuario = ?");
$stmt->bind_param("ii", $idmensaje, $idusuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows == 0) {
    echo '
    <script>
        alert("El ID colocado no corresponde a un mensaje escrito por usted");
        window.location = "formulario_modificar_mensaje.php";
    </script>
    ';
    exit;
}

$stmt->close();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Actualiza el mensaje en la base de datos
    $nuevo_mensaje = htmlspecialchars($_POST['nuevo_mensaje']); // Evitar XSS
    $stmt = $conexion->prepare("UPDATE mensajes SET mensaje = ? WHERE idmensaje = ?");
    $stmt->bind_param("si", $nuevo_mensaje, $idmensaje);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo '
        <script>
            alert("Mensaje actualizado correctamente");
            window.location = "Contacto.php";
        </script>
    ';
        exit;
    } else {
        echo '
        <script>
            alert("Error al actualizar el mensaje");
            window.location = "formulario_modificar_mensaje.php";
        </script>
    ';
    }

    $stmt->close();
}
?>
