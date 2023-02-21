<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>
<body>
    <h1>CADENA DE TEXTO ALEATORIA</h1>

    <?php
        $salida = bin2hex(random_bytes(32));
        echo $salida;
    ?>
</body>
</html>