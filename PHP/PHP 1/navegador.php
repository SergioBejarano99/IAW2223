<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>MUESTRA EL NAVEGADOR</h1>

    <?php
    echo $_SERVER['HTTP_USER_AGENT'];

    $navegador = get_browser();
    print_r($navegador);
    ?>
</body>

</html>