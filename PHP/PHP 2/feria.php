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
    <h1>¿CUÁNTO QUEDA PARA LA FERIA DE ABRIL?</h1>

    <?php
    $fechaActual = new DateTime('now');
    $fechaFeria = new DateTime('2023-04-23');
    $diasFaltantes = $fechaActual->diff($fechaFeria);
    $resultado = $diasFaltantes->days;

    echo '<p>Para la Feria (la cual comoienza el 23/04/2023) quedan ' . $resultado . ' días.</p>';
    ?>
</body>

</html>