<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webscrapping.php</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>URL:</label>
        <input type="text" name="url" size="65" value="<?php echo $the_url;  ?>" placeholder="Escribe aquí la URL." />
        <input type="submit" value="Obtener Emails" />
    </form>

    <?php
    $the_url = isset($_REQUEST['url']) ? htmlspecialchars($_REQUEST['url']) : '';

    if (isset($_REQUEST['url']) && !empty($_REQUEST['url'])) {
        $text = file_get_contents($_REQUEST['url']);
    }

    if (!empty($text)) {
        $res = preg_match_all("/[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}/i", $text, $matches);

        if ($res) {
            foreach (array_unique($matches[0]) as $email) {
                echo $email . "<br />";
            }
        } else {
            echo "No emails found.";
        }
    }

    ?>
</body>

</html>