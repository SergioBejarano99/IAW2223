<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineaspase: Contacto</title>

    <meta autores="@Sergio Bejarano Arroyo @Pablo Domínguez de la Hoz">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/favicon16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon32x32.png" sizes="32x32" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="inicio">
                    <a href="https://192.168.1.211">Lineas<span>p</span>a<span>s</span>e</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/rutasHorarios.php">RUTAS Y HORARIOS</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/contacto.php" class="paginaActiva">CONTACTO</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/textosLegales.html">TEXTOS LEGALES</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/nosotros.html">NOSOTROS</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/iniciarSesionLogin.php">Iniciar sesión</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="contenidoPrincipal">
        <?php
            $nombreIntroducido = "";
            $primerApellidoIntroducido = "";
            $segundoApellidoIntroducido = "";
            $emailIntroducido = "";
            $comentarioIntroducido = "";

            if (isset($_POST["submit"])) {
                    $nombreIntroducido = limpiarCaracteres("nombre");
                    $primerApellidoIntroducido = limpiarCaracteres("primerApellido");
                    $segundoApellidoIntroducido = limpiarCaracteres("segundoApellido");
                    $emailIntroducido = limpiarCaracteres("email");
                    $comentarioIntroducido = limpiarCaracteres("comentario");
                    $aceptarTerminos = limpiarCaracteres("aceptarTerminos");
                }

            function limpiarCaracteres($datos) {
                $datos = trim($datos);
                $datos = stripslashes($datos);
                $datos = htmlspecialchars($datos);
                return $datos;
            }
            ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" placeholder="Escribe tu nombre." required><br>
                <label for="primerApellido">Primer apellido:</label> 
                <input type="text" name="primerApellido" placeholder="Escribe tu primer apellido." required><br>
                <label for="segundoApellido">Segundo apellido:</label> 
                <input type="text" name="segundoApellido" placeholder="Escribe tu segundo apellido." required><br>
                <label for="email">Email:</label> 
                <input type="email" name="email" placeholder="Escribe tu correo eletrónico." required><br>
                <label for="comentario">Comentario:</label><br>
                <textarea name="comentario" cols="30" rows="10" placeholder="Escribe aquí tu comentario." required></textarea><br>
                <input type="checkbox" name="aceptarTerminos" required>He leído y estoy de acuerdo con la <a href="https://192.168.1.211/textosLegales.html#aceptoTerminos">Política de Privacidad<a>.<br>
                <input type="submit" value="Enviar" name="submit">
            </form>

            <?php
                if (isset($_POST["submit"])) {
                    echo "<p class='enviado'>Gracias por tu comentario.</p>";
                }
            ?>
        </div>
    </main>
    <footer>
        <p>Derechos de autor © 2023 Lineaspase. Todos los derechos reservados.</p>
    </footer>
</body>

</html>