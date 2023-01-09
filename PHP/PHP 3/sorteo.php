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
    <h1>SORTEO</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="participantes">Número:</label>
        <input type="number" name="numero" min="1"><br>
        <input type="submit" value="Sorteo">
    </form>

    <?php
    if ($_GET) {
        $numero = htmlspecialchars($_GET["numero"]);

        if ((is_numeric($numero)) && ($numero > 1) && (round($numero, 0) == $numero)) {
            echo "<p>Premio para el número " . rand(1, $numero) . "</p>";
        }
    }
    ?>
</body>

</html>