<?php
session_start();
include 'conex.inc';

// Verifica si la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene el correo y la contraseña del formulario
    $correo = $_POST['correo'];
    $contrasena = $_POST['password'];
    $contrasena = hash('md5', $contrasena); // Encripta la contraseña utilizando el algoritmo MD5

    // Validación: Verifica si existe un usuario con el correo proporcionado
    $validatecor = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if (mysqli_num_rows($validatecor) > 0) {
        // Validación: Verifica si la contraseña es correcta para el usuario dado el correo
        $validatecon = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");

        if (mysqli_num_rows($validatecon) > 0) {
            // Obtiene el ID de usuario
            $idusuario_row = mysqli_fetch_assoc($validatecon);
            $idusuario = $idusuario_row['idusuario'];

            // Elimina los mensajes asociados al usuario
            $deleteMessagesQuery = mysqli_query($conexion, "DELETE FROM mensajes WHERE idusuario='$idusuario'");

            // Elimina el usuario
            $deleteQuery = mysqli_query($conexion, "DELETE FROM usuarios WHERE correo='$correo'");

            if ($deleteQuery && $deleteMessagesQuery) {
                // Éxito: Cuenta y mensajes eliminados correctamente
                echo '
                    <script>
                        alert("La cuenta y todos sus datos han sido eliminados correctamente");
                        window.location = "registro_y_sesión.php";
                    </script>
                ';
                session_destroy(); // Destruye la sesión actual
                exit;
            } else {
                // Error: No se pudieron eliminar la cuenta y los mensajes
                echo '
                    <script>
                        alert("Error al eliminar el usuario y los mensajes");
                        window.location = "formulario_borrar_cuenta.php";
                    </script>
                ';
                exit;
            }
        } else {
            // Error: Contraseña incorrecta
            echo '
                <script>
                    alert("Contraseña incorrecta");
                    window.location = "formulario_borrar_cuenta.php";
                </script>
            ';
            exit;
        }
    } else {
        // Error: Correo electrónico incorrecto
        echo '
            <script>
                alert("Correo electrónico incorrecto");
                window.location = "formulario_borrar_cuenta.php";
            </script>
        ';
        exit;
    }
} else {
    // Redirecciona si la solicitud no es de tipo POST
    header("location: formulario_borrar_cuenta.php");
    exit;
}
?>
