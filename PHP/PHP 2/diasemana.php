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
    <h1>DÍAS DE LA SEMANA</h1>

    <?php
    $diasSemana = date('w');

    switch ($diasSemana) {
        case 0:
            echo '<p>Hoy es Domingo.</p>';
            break;
        case 1:
            echo '<p>Hoy es Lunes.</p>';
            break;
        case 2:
            echo '<p>Hoy es Martes.</p>';
            break;
        case 3:
            echo '<p>Hoy es Miércoles.</p>';
            break;
        case 4:
            echo '<p>Hoy es Jueves.</p>';
            break;
        case 5:
            echo '<p>Hoy es Viernes.</p>';
            break;
        case 6:
            echo '<p>Hoy es Sábado.</p>';
            break;
    }
    ?>
</body>

</html>