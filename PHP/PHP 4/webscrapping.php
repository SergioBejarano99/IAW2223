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
        <input type="text" name="url" placeholder="Escribe la URL."><br>
        <input type="submit" value="Eniar">
    </form>

    <?php
    $campoObligatorio = "";

    $urlIntroducida = "";

    if (isset($_POST["submit"])) {
        if (empty($_POST["url"])) {
            $campoObligatorio = "Debes introducir una URL.";
        } else {
            $html = file_get_contents($urlIntroducida);
            echo $html;
        }
    }
    ?>
</body>

</html>