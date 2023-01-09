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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu Nombre."><br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" placeholder="Escribe tus Apellidos."><br>
        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Escribe tu Email."><br>
        <label for="bruto">Sueldo Bruto:</label>
        <input type="number" name="bruto" min="0"><br>
        <input type="submit" value="Calcular"><br>
    </form>

    <?php
    if ($_POST) {
        $bruto = htmlspecialchars($_POST["bruto"]);

        if ($bruto < 10000) {
            echo '<p>La Cantidad que debe pagar, es de ' . $bruto * 0.5 . '€.</p>';
        } elseif ($bruto < 20000) {
            echo '<p>La Cantidad que debe pagar, es de ' . $bruto * 0.15 . '€.</p>';
        } elseif ($bruto < 35000) {
            echo '<p>La Cantidad que debe pagar, es de ' . $bruto * 0.20 . '€.</p>';
        } elseif ($bruto < 60000) {
            echo '<p>La Cantidad que debe pagar, es de ' . $bruto * 0.30 . '€.</p>';
        } else {
            echo '<p>La Cantidad que debe pagar, es de ' . $bruto * 0.45 . '€.</p>';
        }
    }
    ?>

</body>

</html>