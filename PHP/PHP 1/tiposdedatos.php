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
    <h1>Tios de Datos en PHP con var_dump</h1>

    <?php
    $enteros = 23;
    $reales = 1.2;
    $cadenas = "Ejercicio 5";
    $booleanas = TRUE;
    $arrays = array("Rojo", "Verde", "Azul");

    var_dump($enteros);
    print "<br>";
    var_dump($reales);
    print "<br>";
    var_dump($cadenas);
    print "<br>";
    var_dump($booleanas);
    print "<br>";
    var_dump($arrays);
    ?>
</body>

</html>