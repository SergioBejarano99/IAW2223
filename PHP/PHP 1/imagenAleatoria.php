<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<style>
    img {
        width: 400px;
    }
</style>

<body>
    <h1>IMÁGENES ALEATORIAS</h1>

    <?php
    $imagenes = ['calle.jpg', 'camara.jpg', 'chispas.jpg', 'coche.jpg', 'edificio.jpg', 'montanas.jpg', 'planta.jpg', 'playa.jpg', 'templo.jpg', 'tigre.jpg'];

    $i = rand(0, count($imagenes));

    echo '<img src="' . $imagenes[$i] . '">';
    ?>
</body>

</html>