<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>CAJA DE COLOR ALEATORIO</h1>

    <?php
    $colorRed = rand(0, 255);
    $colorGreen = rand(0, 255);
    $colorBlue = rand(0, 255);

    echo '<div style="background-color: rgb(' . $colorRed . ',' . $colorGreen . ',' . $colorBlue . '); width:300px; height:300px;"></div>';
    ?>
</body>

</html>