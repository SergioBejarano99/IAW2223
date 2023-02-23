<?php
        $servername = ""; //Aquí iría el Nombre del Servidor.
        $bd = ""; //Aquí iría el Nombre de la Base de Datos.
        $usuario = ""; //Aquí iría el Usuario.
        $password = ""; //Aquí iría la Contraseña.

        $enlace = mysqli_connect($servername, $usuario, $password, $bd);

        if (!$enlace) {
            echo "Error en la Conexión: " . mysqli_connect_error();
        } else {
            $query = "ALTER TABLE usuarios ADD fullname TEXT, ADD email TEXT";
            //$query = "ALTER TABLE usuarios ADD email TEXT";
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