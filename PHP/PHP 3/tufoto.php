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

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="foto">Foto:</label><input type="file" name="imagen">
        <input type="submit" name="submit" value="Subir foto">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $directorio = "uploads/"; //Este Directorio debe de crearse en nuestro Servidor manualmente.

        $fichero = $directorio . basename($_FILES["imagen"]["name"]);

        $subidoOk = 1;

        $tipoArchivo = strtolower(pathinfo($fichero, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["imagen"]["tmp_name"]);

        if ($check !== false) {
            echo "Archivo es una imagen - " . $check["mime"] . ".";
            $uploadOk = 1;
            move_uploaded_file($_FILES["imagen"]["tmp_name"], $fichero);
            echo "<img width='20%' src='$fichero'>";
        } else {
            echo "El archivo no es una imagen.";
            $uploadOk = 0;
        }
    }
    ?>
</body>

</html>