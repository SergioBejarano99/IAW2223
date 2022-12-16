<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>TU INFOMACIÓN</h1>

    <?php
    echo '<p>Tu Dirección IP es <strong>' . $_SERVER['REMOTE_ADDR'] . '</strong>.</p>';
    echo '<p>Tu Navegador es <strong>' . $_SERVER['HTTP_USER_AGENT'] . '</strong>.</p>';
    echo '<p>Tu Página Previa es <strong>'  . $_SERVER['HTTP_REFERER'] .  '</strong>.</p>';
    ?>
</body>

</html>