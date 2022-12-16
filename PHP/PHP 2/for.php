<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>DEL 1 AL 10</h1>

    <?php
    echo '<table>';

    for ($contador = 1; $contador <= 10; $contador++) {
        echo '<tr><td>' . $contador . '</td></tr>';
    }

    echo '</table>';
    ?>
</body>

</html>