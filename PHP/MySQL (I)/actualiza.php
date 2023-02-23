<?php
        $servername = ""; //Aquí iría el Nombre del Servidor.
        $bd = ""; //Aquí iría el Nombre de la Base de Datos.
        $usuario = ""; //Aquí iría el Usuario.
        $password = ""; //Aquí iría la Contraseña.

        $enlace = mysqli_connect($servername, $usuario, $password, $bd);

        if (!$enlace) {
            echo "Error en la Conexión: " . mysqli_connect_error();
        } else {
            $query = "UPDATE usuarios SET password='123456' WHERE id=7 LIMIT 1";
            $query = "UPDATE usuarios SET password='123456' WHERE username='paloma' LIMIT 1";
            mysqli_query($enlace,$query);
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