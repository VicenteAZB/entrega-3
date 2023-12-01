<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<header class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- Inicio de la secciÃ³n de navegaciÃ³n (nav) -->
        <div class="container-fluid h3 text-white-100">
            <img class="navbar-brand" width="80" src="./Imágenes/Turbo%20PC.png" alt="Logo de la pÃ¡gina web">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse"  id="menu">
                <ul class="navbar-nav ms-auto"> <!-- Lista no ordenada (ul) con una clase "menu-horizontal" para crear un menÃº horizontal -->
                    <li class="nav-item p-4"><a class="nav-link active" href="index.php">Home</a></li> <!-- Elemento de lista (li) con un enlace (a) a la pÃ¡gina de inicio ("index.php") con el texto "Home" -->
                    <li class="nav-item p-4"><a class="nav-link active" href="Productos%20y%20servicios.php">Productos y servicios</a></li> <!-- Elemento de lista (li) con un enlace (a) a la pÃ¡gina de "Productos y servicios" con el texto correspondiente -->
                    <li class="nav-item dropdown p-4"><a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Quienes somos</a>
                        <ul class="dropdown-menu bg-secondary"> <!-- Lista no ordenada (ul) con una clase "menu-vertical" para crear un menÃƒÂº vertical (submenu) -->
                        <li><a class="dropdown-item h3 text-white-100" href="Historia.php">Historia</a></li> <!-- Elemento de lista (li) con un enlace (a) a la pÃƒÂ¡gina de "Historia" del submenu -->
                        <li><a class="dropdown-item h3 text-white-100" href="Equipo.php">Equipo</a></li> <!-- Elemento de lista (li) con un enlace (a) a la pÃƒÂ¡gina de "Equipo" del submenu -->
                        </ul>
                    <?php
                    if (isset($_SESSION['idusuario'])) {
                        echo '<li class="nav-item p-4"><a class="nav-link active" href="cerrar_sesión.php">Cerrar Sesión</a> </li>';
                    }else{
                        echo '<li class="nav-item p-4"><a class="nav-link active" href="registro_y_sesión.php">Iniciar Sesión</a> </li>';
                    }
                    ?>
                    </li>
                    <li class="nav-item p-4"><a class="nav-link active" href="Contacto.php">Contacto</a></li> <!-- Elemento de lista (li) con un enlace (a) a la pÃ¡gina de "Contacto" -->
                </ul>
            </div>
        </div>
    </nav> <!-- Fin de la secciÃ³n de navegaciÃ³n (nav) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</header>                 
