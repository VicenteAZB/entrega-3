<!-- Enlace al archivo CSS de Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Encabezado con fondo oscuro -->
<header class="bg-dark">

    <!-- Barra de navegación utilizando Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- Inicio de la sección de navegación (nav) -->
        
        <!-- Contenedor fluido para el contenido de la barra de navegación -->
        <div class="container-fluid h3 text-white-100">
            
            <!-- Logotipo de la página en la barra de navegación -->
            <img class="navbar-brand" width="80" src="./Imágenes/Turbo%20PC.png" alt="Logo de la página web">
            
            <!-- Botón de alternancia para la versión móvil de la barra de navegación -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido colapsable de la barra de navegación -->
            <div class="collapse navbar-collapse"  id="menu">
                
                <!-- Lista no ordenada (ul) con una clase "menu-horizontal" para crear un menú horizontal -->
                <ul class="navbar-nav ms-auto">
                    
                    <!-- Elemento de lista (li) con un enlace (a) a la página de inicio ("index.php") con el texto "Home" -->
                    <li class="nav-item p-4"><a class="nav-link active" href="index.php">Home</a></li>
                    
                    <!-- Elemento de lista (li) con un enlace (a) a la página de "Productos y servicios" con el texto correspondiente -->
                    <li class="nav-item p-4"><a class="nav-link active" href="Productos%20y%20servicios.php">Productos y servicios</a></li>
                    
                    <!-- Elemento de lista (li) con un enlace (a) a la página de "Quienes somos" con un menú desplegable -->
                    <li class="nav-item dropdown p-4">
                        <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Quienes somos</a>
                        
                        <!-- Lista no ordenada (ul) con una clase "menu-vertical" para crear un menú vertical (submenu) -->
                        <ul class="dropdown-menu bg-secondary">
                            <!-- Elemento de lista (li) con un enlace (a) a la página de "Historia" del submenu -->
                            <li><a class="dropdown-item h3 text-white-100" href="Historia.php">Historia</a></li>
                            
                            <!-- Elemento de lista (li) con un enlace (a) a la página de "Equipo" del submenu -->
                            <li><a class="dropdown-item h3 text-white-100" href="Equipo.php">Equipo</a></li>
                        </ul>
                    </li>

                    <!-- Condicional en PHP para mostrar el enlace de "Cerrar Sesión" o "Iniciar Sesión" según la sesión del usuario -->
                    <?php
                    if (isset($_SESSION['idusuario'])) {
                        echo '<li class="nav-item p-4"><a class="nav-link active" href="cerrar_sesión.php">Cerrar Sesión</a> </li>';
                    } else {
                        echo '<li class="nav-item p-4"><a class="nav-link active" href="registro_y_sesión.php">Iniciar Sesión</a> </li>';
                    }
                    ?>
                    </li>
                    
                    <!-- Elemento de lista (li) con un enlace (a) a la página de "Contacto" -->
                    <li class="nav-item p-4"><a class="nav-link active" href="Contacto.php">Contacto</a></li>
                
                </ul>
            </div>
        </div>
    </nav> <!-- Fin de la sección de navegación (nav) -->

    <!-- Script para la funcionalidad de Bootstrap (desplegable, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</header> <!-- Fin del encabezado (header) -->
