<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webscrapping.php</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        input[name="url"] {
            width: 500px;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>URL:</label>
        <input type="text" name="url" placeholder="Escribe la URL.">
        <input type="submit" value="Obtener Emails">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $urlIntroducida = $_POST["url"];
        echo '<p>De la URL <strong>' . $urlIntroducida . '</strong> hemos recopilado las siguientes Direcciones de Correo Electrónico</p><br>';
        $html = file_get_contents($urlIntroducida);
        $emailsEncontrados = preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $html, $matches);
        echo $emailsEncontrados;
    }
    ?>
</body>

</html>