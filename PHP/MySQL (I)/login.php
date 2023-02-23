<?php include "conexionBD.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        label, input {
            padding: 3px;
            margin: 5px;
        }

        input[name="nombreUsuario"] {
            width: 200px;
        }

        .correcto {
            color: green;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>INICIAR SESION</h1>

    <?php
        if (isset($_POST["iniciarSesion"])) {
            $nombreUsuario = htmlspecialchars($_POST["nombreUsuario"]);
            $contrasena = htmlspecialchars(md5($_POST["contrasena"]));

            $consultarUsuarios = "SELECT * FROM registros WHERE nombreUsuario LIKE '$nombreUsuario' AND contrasena LIKE '$contrasena'";
            $login = mysqli_query($conexion, $consultarUsuarios);

        if ($login) {
            $fila = mysqli_fetch_array($login);
            if (mysqli_num_rows($login)) {
                $controlErrores = '<span class="correcto">Has iniciado sesión correctamente.<span>';
            } else {
                $controlErrores = '<span class="error">Nombre de Usuario y/o Contraseña Incorrecta.<span>';
            }
        }

        }
    ?>

    <form action="" method="post">
        <label>Nombre de Usuario:</label>
        <input type="text" name="nombreUsuario" placeholder="Escribe tu Nombre de Usuario." required><br>
        <label>Contraseña:</label>
        <input type="password" name="contrasena" placeholder="Escribe tu Contraseña." required><br>
        <input type="submit" value="Iniciar sesión" name="iniciarSesion"><span><?php echo $controlErrores; ?></span>
    </form>
</body>
</html>