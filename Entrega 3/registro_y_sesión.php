<?php
// Incluye el archivo 'header.php', que probablemente contenga la estructura del encabezado HTML común a varias páginas
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración del encabezado del documento HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    
    <!-- Enlace a la hoja de estilos CSS para esta página -->
    <link rel="stylesheet" href="./CSS/registro_y_sesión.css">
</head>

<body>
    <!-- Contenido principal de la página -->
    <main>
        <!-- Contenedor principal con clase 'container' -->
        <div class="container">
            <!-- División principal con clase 'box-main' -->
            <div class="box-main">
                <!-- División con clase 'caja__trasera-login' para la opción de iniciar sesión -->
                <div class="caja__trasera-login">
                    <h3>¿Estás registrado?</h3>
                    <p>Inicia sesión para poder contactarnos</p>
                    <!-- Botón para iniciar sesión con id 'btn__iniciar-sesion' -->
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                
                <!-- División con clase 'caja__trasera-register' para la opción de registrar cuenta -->
                <div class="caja__trasera-register">
                    <h3>Crear cuenta</h3>
                    <p>Regístrate para que puedas contactarnos</p>
                    <!-- Botón para registrarse con id 'btn__registrarse' -->
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            
            <!-- Contenedor para los formularios de inicio de sesión y registro con clase 'container-login' -->
            <div class="container-login">
                <!-- Formulario de inicio de sesión con clase 'formulario__login' -->
                <form action="inicio_sesión.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <!-- Campos de entrada para correo electrónico y contraseña -->
                    <input type="email" placeholder="Ingrese su correo electrónico" name="correo" required>
                    <input type="password" class="passwrd" id="InputPassLogin" placeholder="Ingrese su contraseña" name="password" required>
                    <!-- Botón para enviar el formulario con id 'entrar' -->
                    <button id="entrar">Entrar</button>
                </form>
                
                <!-- Formulario de registro con clase 'formulario__register' -->
                <form action="registro.php" method="POST" name="registro" class="formulario__register">
                    <h2>Registrate Aquí</h2>
                    <!-- Campos de entrada para nombre, correo electrónico, nombre de usuario y contraseña -->
                    <input type="text" placeholder="Ingrese su nombre completo" name="nombre_completo" required>
                    <input type="email" placeholder="Ingrese su correo electrónico" name="correo" required>
                    <input type="text" placeholder="Ingrese un nombre de usuario" name="usuario" required>
                    <input type="password" class="passwrd" id="InputPassRegister" placeholder="Ingrese su contraseña" name="contrasena" required>
                    <!-- Botón para enviar el formulario con id 'btnreg' -->
                    <button id="btnreg">Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    
    <!-- Inclusión de jQuery y el script 'registro_y_sesión.js' -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="./Scripts/registro_y_sesión.js"></script>
</body>
</html>
