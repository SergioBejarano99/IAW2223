<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>TRADUCCIONES</h1>

    <?php
    $palabras = array("Estrella" => "Star", "Nieve" => "Snow", "Noche" => "Evening", "Frío" => "Cold", "Navidad" => "Christmas");

    foreach ($palabras as $palabraEnEspanol => $palabraEnIngles) {
        echo '<p>' . $palabraEnEspanol . ' => ' . $palabraEnIngles . '</p>';
    }
    ?>
</body>

</html>