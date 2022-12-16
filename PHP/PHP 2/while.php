<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>DEL 1 AL 10</h1>

    <?php
    $contador = 1;

    echo '<table>';

    while ($contador <= 10) {
        echo '<tr><td>' . $contador . '</td></tr>';
        $contador++;
    }

    echo '</table>';
    ?>
</body>

</html>