<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        input[name="email"] {
            width: 200;
        }
    </style>
</head>
<body>
    <h1>ENVIAR UN EMAIL</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Destanatario:</label>
        <input type="mail" name="email" placeholder="Escribe el Email del Destinatario." required><br>
        <label>Asunto:</label>
        <input type="text" name="asunto" placeholder="Escribe un Asunto." required><br>
        <label>Mensaje:</label><br>
        <textarea name="mensaje" cols="60" rows="15" placeholder="Escribe aquí tu Mensaje." required></textarea><br>
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
        if ($_GET) {
            $email = htmlspecialchars($_GET['email']);
            $asunto = htmlspecialchars($_GET['asunto']);
            $mensaje = htmlspecialchars($_GET['mensaje']);
            $mail = @mail($email, $asunto, $mensaje);
        }
    ?>
</body>
</html>