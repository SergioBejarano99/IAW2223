<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>SALUDO</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Introduce tu Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu nombre">
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreIntroducido = htmlspecialchars($_POST['nombre']);
        $fechaActual = date('d/m/y');

        echo '<p>Hola ' . $nombreIntroducido . ' hoy es ' . $fechaActual . '</p>';
    }
    ?>
</body>

</html>