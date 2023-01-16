<?php
    session_start();
    $_SESSION["idusuario"] = "sergio";

    if ($_SESSION["idusuario"]) {
        echo "<p>El Usuario " . $_SESSION["idusuario"] . " ha iniciado sesión.</p>";
    } else {
        echo "<p>No hay sesión iniciada.</p>";
    }





/* © Sergio Bejarano Arroyo */
?>