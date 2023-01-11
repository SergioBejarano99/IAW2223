<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de Correo</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>ENVÍO DE CORREO</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Email:</label>
        <input type="submit" name="submit" value="Enviar Email">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $destinatario = 'joseluisnunez@iesamachado.org';
        $asunto = 'mail.php';
        $mensaje = 'Esto es una prueba de que funciona el Ejercicio de "email.php".';

        mail($destinatario, $asunto, $mensaje);
    }
    ?>
</body>

</html>