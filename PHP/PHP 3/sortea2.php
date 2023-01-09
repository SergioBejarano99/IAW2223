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
    <h1>SORTEA 2</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="participantes">Lista de participantes:</label><br>
        <textarea name="participantes" id="participantes" cols="40" rows="10"></textarea><br>
        <label for="numeropremios">Nº de premios:</label>
        <input type="number" name="numeropremios"><br>
        <input type="submit" value="¡Sortear!">
    </form>

    <?php
    if ($_POST) {
        $participantes = htmlspecialchars($_POST["participantes"]);
        $numeropremios = htmlspecialchars($_POST["numeropremios"]);

        if (is_numeric($numeropremios) && $numeropremios >= 1 && round($numeropremios, 0) == $numeropremios) {
            $agraciados = explode("\n", $participantes);

            if ($numeropremios < sizeof($agraciados)) {
                $premios = array_rand($agraciados, $numeropremios);

                if (is_array($premios)) {
                    for ($indice = 0; $indice < sizeof($premios); $indice++) {
                        $premio = $premios[$indice];
                        echo "<p>$agraciados[$premio] ha sido premiado/a</p>";
                    }
                } else {
                    $premiado = rand(0, sizeof($agraciados) - 1);
                    echo "<p>$agraciados[$premiado] ha sido premiado/a</p>";
                }
            } else {
                echo "<p>Hay más premios que participantes</p>";
            }
        } else {
            echo "<p>Debe introducir un número positivo mayor que 1</p>";
        }
    }
    ?>
</body>

</html>