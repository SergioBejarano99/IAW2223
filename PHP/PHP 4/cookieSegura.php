<?php
    setcookie("idioma", "es", time()+60*60*24*30, httponly:true);
    echo $_COOKIE["idioma"];

    if (strcmp($_COOKIE["idioma"], "es") == 0) {
        echo "<p>Tu Idioma es el Español.</p>";
    } else {
        echo "<p>Sin Idioma definido.</p>";
    }





/* © Sergio Bejarano Arroyo */
?>