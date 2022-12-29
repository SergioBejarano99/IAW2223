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
    <h1>RENTA</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu Nombre."><br>
        <label>Apellidos:</label>
        <input type="text" name="apellidos" placeholder="Escribe tus Apellidos."><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Escribe tu Email."><br>
        <label>DNI:</label>
        <input type="text" name="dni" placeholder="Escribe tu DNI."><br>
        <label>Salario Bruto:</label>
        <input type="number" name="salarioBruto" min=1><br>
        <label>Colaboración con ONGs</label>
        <input type="checkbox" name="colaboracion"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($POST["submit"])) {
        $nombreIntroducido = htmlspecialchars($_POST["nombre"]);
        $apellidosIntroducidos = htmlspecialchars($_POST["apellidos"]);
        $emailIntroducido = htmlspecialchars($_POST["email"]);
        $dniIntroducido = htmlspecialchars($_POST["dni"]);
        $salarioBrutoIntroducido = htmlspecialchars($_POST["salarioBruto"]);

        $exencionFiscal = 2 / 100;

        if (($salarioBrutoIntroducido < 10000) && ($_POST["colaboracion"] == '1')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 5 / 100 + $exencionFiscal . '€.</p>';
        } elseif (($salarioBrutoIntroducido < 10000) && ($_POST["colaboracion"] == '0')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 5 / 100 . '€.</p>';
        }

        if (($salarioBrutoIntroducido >= 10000) && ($salarioBrutoIntroducido < 20000) && ($_POST["colaboracion"] == '1')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 15 / 100 + $exencionFiscal . '€.</p>';
        } elseif (($salarioBrutoIntroducido >= 10000) && ($salarioBrutoIntroducido < 20000) && ($_POST["colaboracion"] == '0')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 15 / 100 . '€.</p>';
        }

        if (($salarioBrutoIntroducido >= 20000) && ($salarioBrutoIntroducido < 35000) && ($_POST["colaboracion"] == '1')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 20 / 100 + $exencionFiscal . '€.</p>';
        } elseif (($salarioBrutoIntroducido >= 20000) && ($salarioBrutoIntroducido < 35000) && ($_POST["colaboracion"] == '0')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 20 / 100 . '€.</p>';
        }

        if (($salarioBrutoIntroducido >= 35000) && ($salarioBrutoIntroducido <= 60000) && ($_POST["colaboracion"] == '1')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 30 / 100 + $exencionFiscal . '€.</p>';
        } elseif (($salarioBrutoIntroducido >= 35000) && ($salarioBrutoIntroducido <= 60000) && ($_POST["colaboracion"] == '0')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 30 / 100 . '€.</p>';
        }

        if (($salarioBrutoIntroducido > 60000) && ($_POST["colaboracion"] == '1')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 45 / 100 + $exencionFiscal . '€.</p>';
        } elseif (($salarioBrutoIntroducido > 60000) && ($_POST["colaboracion"] == '0')) {
            echo '<p>La Cantidad que debe pagar, es de ' . $salarioBrutoIntroducido * 45 / 100 . '€.</p>';
        }
    }
    ?>
</body>

</html>