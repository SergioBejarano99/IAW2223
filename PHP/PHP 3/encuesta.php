<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <meta autor="Sergio Bejarano Arroyo">

    <style>
        .obligatorio {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $campoObligatorio = "";

    $nombreIntroducido = "";
    $primerApellidoIntroducido = "";
    $segundoApellidoIntroducido = "";
    $lugarNacimientoIntroducido = "";
    $fechaNacimientoIntroducida = "";
    $sexoIntroducido = "";
    $opinionIntroducida = "";
    $deacurdoIntroducido = "";

    if (isset($_POST["submit"])) {
        if (empty($_POST["nombre"]) || empty($_POST["primerApellido"]) || empty($_POST["segundoApellido"]) || empty($_POST["lugarNacimiento"]) || empty($_POST["fechaNacimiento"]) || empty($_POST["sexo"]) || empty($_POST["opinion"]) || empty($_POST["deacuerdo"])) {
            $campoObligatorio = "Este Campo es obligatorio.";
        } else {
            $nombreIntroducido = datosRellenados($_POST["nombre"]);
            $primerApellidoIntroducido = datosRellenados($_POST["primerApellido"]);
            $segundoApellidoIntroducido = datosRellenados($_POST["segundoApellido"]);
            $lugarNacimientoIntroducido = datosRellenados($_POST["lugarNacimiento"]);
            $fechaNacimientoIntroducida = datosRellenados($_POST["fechaNacimiento"]);
            $sexoIntroducido = datosRellenados($_POST["sexo"]);
            $opinionIntroducida = datosRellenados($_POST["opinion"]);
            $deacurdoIntroducido = datosRellenados($_POST["deacuerdo"]);
        }
    }

    function datosRellenados($datos)
    {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return ($datos);
    }
    ?>

    <h1>ENCUESTA</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu Nombre."> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <label>Primer Apellido:</label>
        <input type="text" name="primerApellido" placeholder="Escribe tu Primer Apellido."> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <label>Segundo Apellido:</label>
        <input type="text" name="segundoApellido" placeholder="Escribe tu Segundo Apellido."> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <label>Lugar de Nacimiento:</label>
        <select name="lugarNacimiento">
            <option value="seleccionaElLugarDeNacimiento">-- Selecciona el Lugar de Nacimiento --</option>
            <option value="Huelva">Huelva</option>
            <option value="Sevilla">Sevilla</option>
            <option value="Córdoba">Córdoba</option>
            <option value="Jaén">Jaén</option>
            <option value="Cádiz">Cádiz</option>
            <option value="Málaga">Málaga</option>
            <option value="Granada">Granada</option>
            <option value="Almería">Almería</option>
        </select> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <label>Fecha de Nacimiento:</label>
        <input type="date" name="fechaNacimiento"> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="Hombre">Hombre.
        <input type="radio" name="sexo" value="Mujer">Mujer. <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <label>Opinión:</label> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <textarea name="opinion" id="" cols="25" rows="5" placeholder="Escribe tu Opinión aquí."></textarea><br>
        <label>Estoy deacuerdo con el Tratamiento de estos Datos:</label>
        <input type="checkbox" name="deacuerdo"> <span class="obligatorio"><?php echo $campoObligatorio; ?></span> <br>
        <input type="submit" name="submit" value="Enviar"><br><br>
    </form>

    <?php
    if ($campoObligatorio == "") {
        echo '<h3>El Resumen de tu Encuensta, es el siguiente:</h3>';

        echo '<p>Nombre: <strong>' . $nombreIntroducido . '</strong></p>';
        echo '<p>Apellidos: <strong>' . $primerApellidoIntroducido . '</strong> <strong>' . $segundoApellidoIntroducido . '</strong></p>';
        echo '<p>Fecha y Lugar de Nacimiento: <strong>' . $fechaNacimientoIntroducida . '</strong> - <strong>' . $lugarNacimientoIntroducido . '</strong></p>';
        echo '<p>Sexo: <strong>' . $sexoIntroducido . '</strong></p>';
        echo '<p>Opinión: <strong>' . $opinionIntroducida . '</strong></p>';
    }
    ?>
</body>

</html>