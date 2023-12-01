<?php
session_start();
include 'conex.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];
    $contrasena = hash('md5', $contrasena);

    $validatecor = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if (mysqli_num_rows($validatecor) > 0) {
        $validatecon = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

        if (mysqli_num_rows($validatecon) > 0) {
            $idusuario_row = mysqli_fetch_assoc($validatecon);
            $idusuario = $idusuario_row['idusuario'];

            // Eliminar mensajes asociados al usuario
            $deleteMessagesQuery = mysqli_query($conexion, "DELETE FROM mensajes WHERE idusuario='$idusuario'");

            // Eliminar usuario
            $deleteQuery = mysqli_query($conexion, "DELETE FROM usuarios WHERE correo='$correo'");

            if ($deleteQuery && $deleteMessagesQuery) {
                echo '
                    <script>
                        alert("La cuenta y todos sus datos han sido eliminados correctamente");
                        window.location = "registro_y_sesión.php";
                    </script>
                ';
                session_destroy();
                exit;
            } else {
                echo '
                    <script>
                        alert("Error al eliminar el usuario y los mensajes");
                        window.location = "formulario_borrar_cuenta.php";
                    </script>
                ';
                exit;
            }
        } else {
            echo '
                <script>
                    alert("Contraseña incorrecta");
                    window.location = "formulario_borrar_cuenta.php";
                </script>
            ';
            exit;
        }
    } else {
        echo '
            <script>
                alert("Correo electrónico incorrecto");
                window.location = "formulario_borrar_cuenta.php";
            </script>
        ';
        exit;
    }
} else {
    header("location: formulario_borrar_cuenta.php");
    exit;
}
?>
