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
    <h1>ORDENACIÓN LEXICOGRÁFICA</h1>

    <?php
    $palabras = array("sergio", "teclado", "portátil", "programación", "monitor", "procesador", "silla", "barebone", "alicates", "enchufe");
    sort($palabras);

    foreach ($palabras as $ordenacion) {
        echo '<p>' . $ordenacion . '</p>';
    }
    ?>
</body>

</html>