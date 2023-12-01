<?php
if (isset($_SESSION['usuario'])) {
    header("location: contacto.php");
}
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="./CSS/registro_y_sesión.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="box-main">
                <div class="caja__trasera-login">
                    <h3>¿Estás registrado?</h3>
                    <p>Inicia sesión para poder contactarnos</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Crear cuenta</h3>
                    <p>Regístrate para que puedas contactarnos</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <div class="container-login">
                <form action="inicio_sesión.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" placeholder="Ingrese su correo electrónico" name="correo" required>
                    <input type="password" class="passwrd" id="InputPassLogin" placeholder="Ingrese su contraseña" name="password" required>
                    <button id="entrar">Entrar</button>
                </form>
                <form action="registro.php" method="POST" name="registro" class="formulario__register">
                    <h2>Registrate Aquí</h2>
                    <input type="text" placeholder="Ingrese su nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Ingrese su correo electrónico" name="correo" required>
                    <input type="text" placeholder="Ingrese un nombre de usuario" name="usuario" required>
                    <input type="password" class="passwrd" id="InputPassRegister" placeholder="Ingrese su contraseña" name="contrasena" required>
                    <button id="btnreg">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./Scripts/registro_y_sesión.js"></script>
</body>
</html>