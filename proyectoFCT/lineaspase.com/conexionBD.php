<?php
    $servername = "localhost";
    $bd = "lineaspase";
    $usuario = "administrador";
    $password = "proY3ct1T0";

    $enlace = mysqli_connect($servername, $usuario, $password, $bd);

    if (!$enlace) {
        echo "Error en la Conexión: " . mysqli_connect_error();
    }
?>