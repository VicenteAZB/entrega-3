<?php
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $BD = "a2023_vaalvarez";
    $conexion = mysqli_connect($host, $usuario, $clave, $BD);
    $conexion->set_charset("utf8");
    //if($conexion) echo 'Conectado a la base de datos'
?>
