<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        input[name="premios"] {
            width: 210px;
        }

        textarea {
            width: 412px;
            height: 200px;
        }
    </style>
</head>

<body>
    <h1>SORTEA 2</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Participantes:</label><br>
        <textarea name="participantes" placeholder="Escribe los Participantes, separados por Espacios."></textarea><br>
        <label>Número de Premios:</label>
        <input type="text" name="numeroPremios" placeholder="Introduce la Cantidad de Premios.">
        <input type="submit" name="submit" value="Sortear">
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $cantidadParticipantes = htmlspecialchars($_POST["participantes"]);
        $cantidadParticipantes = explode(" ", $cantidadParticipantes);

        echo "Los participantes son: ";

        for ($j = 0; $j < count($cantidadParticipantes); $j++) {
            echo $cantidadParticipantes[$j] . ", ";
        }

        $cantidadPremios = intval(htmlspecialchars($_POST["numeroPremios"]));

        for ($i = 1; $i <= $cantidadPremios; $i++) {
            $ganadaor = mt_rand(1, count($cantidadParticipantes));
            echo "El premio " . $i . " es para: " . $cantidadParticipantes[$ganadaor] . "<br>";
        }
    }
    ?>
</body>

</html>