<?php
// Inicia la sesión para mantener la información del usuario entre páginas
session_start();

// Incluye el archivo de conexión a la base de datos
include 'conex.inc';

// Obtiene el correo y la contraseña proporcionados en el formulario de inicio de sesión
$correo = $_POST['correo'];
$contrasena = $_POST['password'];

// Aplica una función de hash (MD5 en este caso) a la contraseña para mayor seguridad
$contrasenaHash = hash('md5', $contrasena);

// Utiliza una sentencia preparada para evitar la inyección SQL
$query = "SELECT * FROM usuarios WHERE correo = ? AND contrasena = ?";
$stmt = mysqli_prepare($conexion, $query);

// Vincula los parámetros con la sentencia preparada
mysqli_stmt_bind_param($stmt, 'ss', $correo, $contrasenaHash);

// Ejecuta la sentencia preparada
mysqli_stmt_execute($stmt);

// Obtiene los resultados de la ejecución de la sentencia preparada
$resultado = mysqli_stmt_get_result($stmt);

// Verifica si se encontró un usuario válido
if ($row = mysqli_fetch_assoc($resultado)) {
    // Inicia la sesión con el ID del usuario
    $_SESSION['idusuario'] = $row['idusuario'];
    
    // Redirige a la página de contacto
    header("location: Contacto.php");
    exit;
} else {
    // Si no se encuentra un usuario válido, muestra una alerta y redirige a la página de inicio de sesión
    echo '
        <script>
            alert("Correo electrónico o contraseña incorrectos");
            window.location = "registro_y_sesión.php";
        </script>
    ';
    exit;
}

// Cierra la sentencia preparada y la conexión para liberar recursos
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
