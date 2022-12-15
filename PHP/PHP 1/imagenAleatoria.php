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
    $imagenes = ['img/calle.jpg', 'img/camara.jpg', 'img/chispas.jpg', 'img/coche.jpg', 'img/edificio.jpg', 'img/montanas.jpg', 'img/planta.jpg', 'img/playa.jpg', 'img/templo.jpg', 'img/tigre.jpg'];

    $posicion = rand(0, count($imagenes));

    echo '<img src="' . $imagenes[$posicion] . '">';
    ?>
</body>

</html>