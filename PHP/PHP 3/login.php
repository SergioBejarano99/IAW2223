<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>LOGIN</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" placeholder="Introduce tu usuario"><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" placeholder="Introduce tu contraseña"><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $usuarioIntroducido = htmlspecialchars($_POST["usuario"]);
        $contrasenaIntroducida = htmlspecialchars($_POST["contrasena"]);

        $usuarioObligatorio = "admin";
        $contrasenaObligatoria = "H4CK3R4$1R";

        if (!strcmp($usuarioIntroducido, $usuarioObligatorio) && !strcmp($contrasenaIntroducida, $contrasenaObligatoria)) {
            echo "<p>Acceso concedido</p>";
        } else {
            echo "<p>Acceso denegado</p>";
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
            <p>Haciendo uso de la Función "htmlspecialchars()".</p>
        </li>
    </ul>
</body>

</html>