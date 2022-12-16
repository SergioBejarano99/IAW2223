<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #cajaPrincipal {
            border: 1px solid rgb(207, 217, 222);
            border-radius: 20px;
            width: 30%;
            padding: 10px;
            background-color: rgb(250, 250, 255);
        }

        #cabecera {
            display: flex;
        }

        img {
            border-radius: 50%;
            width: 50px;
            padding: 10px;
        }

        #seguir {
            color: rgb(29, 155, 240);
            font-weight: bolder;
        }

        a:link,
        a:visited,
        a:active {
            text-decoration: none;
        }

        #iconoTwitter {
            float: right;
        }

        .seguirUsuario,
        h4 {
            margin: 0px;
        }

        #usuario {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .username {
            color: rgb(133, 145, 154);
        }

        .tweets {
            font-size: 20px;
            margin-left: 10px;
            margin-bottom: 0px;
            margin-top: 50px;
        }

        .fechaHoraEnvio {
            color: rgb(133, 145, 154);
            margin-top: 0px;
            margin-bottom: 5px;
            margin-left: 10px;
            font-size: 12px;
        }

        .cajaComentarios {
            border-top: 1px solid rgb(207, 217, 222);
            display: flex;
            color: rgb(83, 100, 113);
            display: flex;
            justify-content: center;
        }

        .cajaComentarios img {
            width: 20px;
            border-radius: 0px;
            font-weight: bold;
        }

        .respuestas {
            text-align: center;
            border: 1px solid rgb(207, 217, 222);
            border-radius: 20px;
            color: rgb(0, 111, 214);
            font-size: 20px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>TWITTER</h1>
    <div id="cajaPrincipal">
        <div id="cabecera">
            <img src="https://img2.freepng.es/20200413/cx/transparent-icon-design-5e9514e3e94e76.6287660515868285159556.jpg" alt="Foto de Perfil del Usuario.">
            <div id="usuario">
                <h4>Sergio Bejarano Arroyo</h4>
                <p class="seguirUsuario"><span class="username">@sergio ·</span><span id="seguir"><a href=""> Seguir</a></span></p>
            </div>
            <img id="iconoTwitter" src="http://atrcv.org/wp-content/uploads/2012/12/twitter.jpg" alt="Icono de Twitter">
        </div>

        <div id="mensajes">
            <?php
            function twitter()
            {
                $tweets = array("Mi primer tweet", "IAW es la mejor clase", "!Por fin viernes¡", "Último tweet");

                $horaEnvio = date("H:i");
                $fechaEnvio = date("d M. Y");
                foreach ($tweets as $mostrarTweets) {
                    echo '<p class="tweets">' . $mostrarTweets . '</p>';
                    echo '<p class="fechaHoraEnvio">' . $horaEnvio . 'p.m.· ' . $fechaEnvio . '</p>';

                    $views = rand(2, 7);
                    echo '<div class="cajaComentarios">
                            <img src="https://cdn-icons-png.flaticon.com/512/5720/5720164.png">' . $views . ' mil
                            <img src="https://cdn-icons-png.flaticon.com/512/8315/8315964.png">Responder
                            <img src="https://cdn-icons-png.flaticon.com/512/3580/3580382.png">Compartir
                        </div>';
                    echo '<div class="respuestas">Leer ' . $views . ' mil respuestas</div>';
                }
            }

            twitter();
            ?>
        </div>
    </div>

    <!-- IDEA PRINCIPAL (descomentar para ver el Resultado): <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Sunsets don&#39;t get much better than this one over <a href="https://es.wikipedia.org/wiki/Twitter,_Inc.">@GrandTetonNPS</a>. <a href="https://es.wikipedia.org/wiki/Twitter,_Inc.">#nature</a> <a href="https://es.wikipedia.org/wiki/Twitter,_Inc.">#sunset</a> <a href="http://t.co/YuKy2rcjyU">pic.twitter.com/YuKy2rcjyU</a></p>&mdash; US Department of the Interior (@Interior) <a href="https://twitter.com/Interior/status/463440424141459456?ref_src=twsrc%5Etfw">May 5, 2014</a></blockquote><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->
</body>

</html>