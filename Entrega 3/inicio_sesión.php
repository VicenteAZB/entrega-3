<?php
session_start();
include 'conex.inc';

$correo = $_POST['correo'];
$contrasena = $_POST['password'];

// Hash seguro para almacenar contraseñas (reemplaza esto con un método más seguro como bcrypt)
$contrasenaHash = hash('md5', $contrasena);

// Sentencia preparada para evitar inyección SQL
$query = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";
$stmt = mysqli_prepare($conexion, $query);

mysqli_stmt_bind_param($stmt, 'ss', $correo, $contrasenaHash);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);

if ($row = mysqli_fetch_assoc($resultado)) {
    $_SESSION['idusuario'] = $row['idusuario'];
    header("location: Contacto.php");
    exit;
} else {
    echo '
        <script>
            alert("Correo electrónico o contraseña incorrectos");
            window.location = "registro_y_sesión.php";
        </script>
    ';
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
