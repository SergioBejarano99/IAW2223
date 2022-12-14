<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>FECHA Y HORA</h1>

    <?php
    $hora24h = date("H:i:s");
    $fechaCorta = date("d/m/Y");
    $diasSemana = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    $mesesEspanol = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

    echo '<h4>Fecha y Hora Original:</h4>';
    echo '<p>Hoy estamos a ' . $fechaCorta . ' y son las ' . $hora24h . '.</p>';

    echo '<h4>Fecha y Hora en Español:</h4>';
    echo '<p>' . $diasSemana[date('w')] . ' a ' . date('d') . ' de ' . $mesesEspanol[date('n') - 1] . ' del ' . date('Y') . '. (' . $hora24h . ').</p>';
    ?>
</body>

</html>