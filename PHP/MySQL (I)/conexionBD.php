<?php
        $servername = ""; //Aquí iría el Nombre del Servidor.
        $bd = ""; //Aquí iría el Nombre de la Base de Datos.
        $usuario = ""; //Aquí iría el Usuario.
        $password = ""; //Aquí iría la Contraseña.

    $conexion = mysqli_connect($servername, $usuario, $password, $bd);

    if (!$conexion) {
        die("Conexión fallida con base de datos: " . mysqli_connect_error());
        echo "CONEXIÓN FALLIDA";
    } else {
        echo "CONECTADO";
    }





    /* © Sergio Bejarano Arroyo */
?>