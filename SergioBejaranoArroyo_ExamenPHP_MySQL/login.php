<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login IES Antonio Machado</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <link rel="stylesheet" href="estilosLogin.css">
    <link rel="icon" type="image/png" href="logotipo.png" />
</head>

<body>
    <?php
    $camposObligatorios = "";
    $usuarioIntroducido = "";
    $contrasenaIntroducida = "";

    if (isset($_POST["submit"])) {
        if (empty($_POST["usuario"]) || empty($_POST["contrasena"])) {
            $camposObligatorios = "Debes introducir una Contraseña y un Usuario.";
        } else {
            $usuarioIntroducido = limpiadoHtml($_POST["usuario"]);
            $contrasenaIntroducida = limpiadoHtml(MD5($_POST["contrasena"]));
        }
    }

    function limpiadoHtml($datos)
    {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return ($datos);
    }


    $servername = ""; //Aquí iría el Nombre del Servidor.
    $bd = ""; //Aquí iría el Nombre de la Base de Datos.
    $usuario = ""; //Aquí iría el Usuario.
    $password = ""; //Aquí iría la Contaseña.

    $enlace = mysqli_connect($servername, $usuario, $password, $bd);

    if (!$enlace) {
        echo mysqli_connect_error();
    } else {
        session_start();

        $consultarUsuarios = "SELECT * FROM usuarios WHERE usuario = '$usuarioIntroducido' AND contrasena = '$contrasenaIntroducida'";
        $login = mysqli_query($enlace, $consultarUsuarios);

        if ($login) {
            $fila = mysqli_fetch_array($login);
            if (mysqli_num_rows($login)) {
                echo "<script>window.location='controlIncidencias.php'</script>";
            } else {
                $camposObligatorios = "Combinación de Usuario y/o Contraseña incorrecta.";
            }
        }

        mysqli_close($enlace);
    }
    ?>

    <h1>I.E.S. ANTONIO MACHADO</h1>
    <h6>PROYECTO MySQL: Gestión de incidencias IES Antonio Machado</h6>

    <div class="cajaPrincipal">
        <p class="logotipo">
            <img src="logotipo.png">
        </p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>
                <label>Usuario:</label><br>
                <input type="text" name="usuario" placeholder="Esrcibe tu Usuario.">
            </p>
            <p>
                <label>Contraseña:</label><br>
                <input type="password" name="contrasena" placeholder="Escribe tu Contraseña">
            </p>
            <p class="iniciarSesion">
                <input type="submit" name="submit" value="Iniciar Sesión"><br>
                <span class="error"><?php echo $camposObligatorios; ?></span>
            </p>
        </form>
    </div>

    <footer>
        <p>© Sergio Bejarano Arroyo - 2023</p>
    </footer>
</body>

</html>