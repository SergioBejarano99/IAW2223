<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        label {
            margin-right: 5px;
        }

        input[type="submit"] {
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>LOGIN</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <label>Usuario:</label>
        <input type="text" name="usuario" placeholder="Introduce tu usuario"><br>
        <label>Contraseña:</label>
        <input type="password" name="contrasena" placeholder="Introduce tu contraseña"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $usuarioIntroducido = htmlspecialchars($_REQUEST['usuario']);
            $contrasenaIntroducida = htmlspecialchars($_REQUEST['contrasena']);

            if (($usuarioIntroducido != "admin") && ($contrasenaIntroducida != "H4CK3R4$1R")) {
                echo '<p>Acceso denegado</p>';
            } else {
                echo '<p>Acceso concedido</p>';
            }
        }
    ?>

    <h3>PREGUNTAS:</h3><!-- Preguntas propuestas en el Ejercicio. -->
    <ul>
        <li>
            <h4>¿Qué Método deberáimos utilizar para enviar los Datos al Servidor?:</h4>
            <p>Deberíamos de utilizar el Método "get"</p>
        </li>
        <li>
            <h4>¿Cómo podemos "sanear" la Entrada de Datos para evitar Inyecciones de Código?:</h4>
            <p>Haciendo uso de </p>
        </li>
    </ul>
</body>
</html>