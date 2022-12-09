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
    <h1>Operadores de Cadena:</h1>

    <?php
    $miCadena = "Esto es una Variable de Tipo Cadena.";
    echo "<p>Mi Cadena Original es: " . $miCadena . "</p>";
    echo "<p>La Longitud de la Cadena es: " .  strlen($miCadena) . "</p>";
    echo "<p>Mi Cadena tiene: " .  str_word_count($miCadena) . " Palabras</p>";
    echo "<p>Mi Cadena inversa es: " .  strrev($miCadena) . "</p>";
    echo "<p>Muestra la Posición de la Palabra una: " .  strpos($miCadena, "una") . "</p>";
    echo "<p>Sustituye la Palabra Sergio por la Palabra Mundo en la Frase Hola Sergio: " .  str_replace("Sergio", "Mundo", "Hola Sergio") . "</p>";

    echo "<p>Comprobamos si la Palabra Esto está en mi Cadena:</p>";
    $esta = strpos($miCadena, "Esto");
    if ($esta != FALSE) {
        echo "<p>La Palabra está en la Cadena</P>";
    } else {
        echo "<p>La Palabra no está en la Cadena</P>";
    }
    ?>
</body>

</html>