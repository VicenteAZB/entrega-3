<?php
// Incluye el archivo 'conex.inc', que probablemente contiene la conexión a la base de datos
include 'conex.inc';

// Obtiene y escapa los valores del formulario
$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

// Verifica si el correo ya está registrado en la base de datos
$verifyc = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
if(mysqli_num_rows($verifyc) > 0){
    echo '
        <script>
            alert("Correo ya registrado");
            window.location = "registro_y_sesión.php";
        </script>
    ';
    exit();
}

// Verifica si el nombre de usuario ya está registrado en la base de datos
$verifyu = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
if(mysqli_num_rows($verifyu) > 0){
    echo '
        <script>
            alert("Usuario ya registrado");
            window.location = "registro_y_sesión.php";
        </script>
    ';
    exit();
}

// Aplica un hash seguro a la contraseña (considera utilizar métodos más seguros como bcrypt)
$hashed_password = md5($contrasena);

// Sentencia preparada para evitar la inyección SQL
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conexion, $query);

// Verifica si hay errores en la preparación de la consulta
if (!$stmt) {
    die('Error en la preparación de la consulta: ' . mysqli_error($conexion));
}

// Vincula los parámetros y ejecuta la sentencia preparada
mysqli_stmt_bind_param($stmt, 'ssss', $nombre_completo, $correo, $usuario, $hashed_password);
$ejecutar = mysqli_stmt_execute($stmt);

// Verifica si la ejecución fue exitosa
if($ejecutar){
    echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "registro_y_sesión.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Error al registrar el usuario");
            window.location = "registro_y_sesión.php";
        </script>
    ';
}

// Cierra la sentencia preparada y la conexión a la base de datos
mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
