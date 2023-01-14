<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexión</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>
<body>
    <?php
        $servername = ""; //Aquí iría el Nombre de tu Servidor.
        $bd = ""; //Aquí iría el Nombre de tu Base de Datos.
        $usuario = ""; //Aquí iría tu Usuario.
        $password = ""; //Aquí iría tu Contraseña.

        $enlace = mysqli_connect($servername, $usuario, $password, $bd);

        if (!$enlace) {
            echo "Error en la Conexión: " . mysqli_connect_error();
        } else {
            echo "Conexión con Éxito.";
            mysqli_close($enlace);
        }
?>
</body>
</html>