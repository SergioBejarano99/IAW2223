<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>TU FOTO</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu Nombre."><br>
        <label>Foto:</label>
        <input type="file" name="archivo"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    $nombreIntroducido = "";
    $fotoIntroducida = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombreIntroducido = test_input($_POST["nombre"]);
        if (isset($_POST["nombre"])) {
            $nombreIntroducido = test_input($_POST["nombre"]);
            $nombreIntroducido = htmlspecialchars($_POST['nombre']);
            echo '<h3>' . $nombreIntroducido . '</h3>';
        }
    }


    if (isset($_POST['submit'])) {
        $archivo = $_FILES['archivo']['name'];

        if (isset($archivo) && $archivo != "") {
            $temp = $_FILES['archivo']['tmp_name'];

            if (move_uploaded_file($temp, 'images/' . $archivo)) {
                echo '<p><img src="images/' . $archivo . '"></p>';
            } else {
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
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