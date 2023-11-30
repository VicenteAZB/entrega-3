<?php

include 'conex.inc';

$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

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

$hashed_password = md5($contrasena);

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conexion, $query);

if (!$stmt) {
    die('Error en la preparación de la consulta: ' . mysqli_error($conexion));
}

mysqli_stmt_bind_param($stmt, 'ssss', $nombre_completo, $correo, $usuario, $hashed_password);
$ejecutar = mysqli_stmt_execute($stmt);

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

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
