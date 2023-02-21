<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>
<body>
    <h1>CIFRADO DE TEXTOS</h1>

    <?php
        $campoObligatorio = "";

        if (isset($_POST["submit"])) {
            if (empty($_POST["texto"])) {
                $campoObligatorio = "Debe introducir un Texto.";
            } else {
                $textoIntroducido = datosRellenados(md5($_POST["texto"]));
            }
        }

        function datosRellenados($datos) {
            $datos = trim($datos);
            $datos = stripslashes($datos);
            $datos = htmlspecialchars($datos);
            return ($datos);
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Texto:</label>
        <input type="text" name="texto" placeholder="Escribe un Texto.">
        <input type="submit" name="submit" value="Encriptar"><br><br>
    </form>

    <?php
        if ($campoObligatorio == "") {
        echo '<p><strong>' . $textoIntroducido . '</strong></p>';
    }
    ?>
</body>
</html>