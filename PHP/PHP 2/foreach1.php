<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>REFRANES</h1>

    <?php
    $refranes = array("Haz el bien sin mirar a quién.", "La avaricia rompe el saco.", "Más vale prevenir que curar.", "Es oro todo lo que reluce.", "A mal tiempo buena cara.");

    foreach ($refranes as $mostrarRefranes) {
        echo '<p>' . $mostrarRefranes . '</p>';
    }
    ?>
</body>

</html>