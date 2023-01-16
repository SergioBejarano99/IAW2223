<?php
        $servername = ""; //Aquí iría el Nombre de tu Servidor.
        $bd = ""; //Aquí iría el Nombre de tu Base de Datos.
        $usuario = ""; //Aquí iría tu Usuario.
        $password = ""; //Aquí iría tu Contraseña.

        $enlace = mysqli_connect($servername, $usuario, $password, $bd);

        if (!$enlace) {
            echo "Error en la Conexión: " . mysqli_connect_error();
        } else {
            $query = "SELECT * FROM usuarios";
            $resultado = mysqli_query($enlace, $query);
            if ($resultado) {
                while ($fila = mysqli_fetch_array($resultado)) {
                    print_r($fila);
                    echo "<br>";
                }
            }
            mysqli_close($enlace);
        }





    /* © Sergio Bejarano Arroyo */
?>