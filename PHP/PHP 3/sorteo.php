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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Participantes:</label><br>
        <textarea name="participantes" cols="30" rows="10" placeholder="Escribe los Participantes"></textarea><br>
        <input type="submit" value="Sortear">
    </form>

    <?php
    $participantesIntroducidos = "";
    $numerosAleatorios = rand(1, 50);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $participantesIntroducidos = test_input($_POST["participantes"]);
        if (isset($_POST["participantes"])) {
            $participantesIntroducidos = test_input($_POST["participantes"]);
            $participantesIntroducidos = htmlspecialchars($_POST['participantes']);

            echo '<p>Enorabuena, ha sido premiado el Participante Número ' . $numerosAleatorios . '.</p>';
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</body>

</html>