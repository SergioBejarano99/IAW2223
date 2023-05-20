<?php include "conexionBD.php"; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineaspase: Rutas y Horarios</title>

    <meta autores="@Sergio Bejarano Arroyo @Pablo Domínguez de la Hoz">
    <link rel="stylesheet" href="css/rutasHorarios.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/favicon16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon32x32.png" sizes="32x32" />

    <script src="js/cajasDesplegables.js"></script>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li class="inicio">
                    <a href="https://192.168.1.211">Lineas<span>p</span>a<span>s</span>e</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/rutasHorarios.php" class="paginaActiva">RUTAS Y HORARIOS</a>
                </li>
                <li>
                    <a href="https://192.168.1.211/contacto.html">CONTACTO</a>
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
                <h1>RUTAS Y HORARIOS</h1>
                <?php /* LINEA L-1 */
                    session_start();

                    $consultarLineasRutas = "SELECT lineas.codigo AS 'codigoLinea', lineas.nombre AS 'nombreLinea', lo.nombre AS 'localidadOrigenNombre', lo.ciudad AS 'localidadOrigenCiudad', ld.nombre AS 'localidadDestinoNombre', ld.ciudad AS 'localidadDestinoCiudad', DATE_FORMAT(lineas.hora_salida, '%H:%i') AS 'horaSalida', DATE_FORMAT(lineas.hora_llegada, '%H:%i') AS 'horaLlegada', REPLACE(billetes.precio_venta, '.', ',') AS 'precioBillete'
                                             FROM lineas, localidad lo, localidad ld, billetes
                                             WHERE lineas.localidad_origen = lo.codigo AND lineas.localidad_destino = ld.codigo AND lineas.codigo = billetes.codigo AND lineas.nombre LIKE 'L-1'";
                    $resultadoLineasRutas = mysqli_query($enlace, $consultarLineasRutas);

                    if($resultadoLineasRutas) {
                        $fila = mysqli_fetch_assoc($resultadoLineasRutas);

                        $codigoLinea = $fila['codigoLinea'];
                        $nombreLinea = $fila['nombreLinea'];
                        $localidadOrigenNombre = $fila['localidadOrigenNombre'];
                        $localidadOrigenCiudad = $fila['localidadOrigenCiudad'];
                        $localidadDestinoNombre = $fila['localidadDestinoNombre'];
                        $localidadDestinoCiudad = $fila['localidadDestinoCiudad'];
                        $precioBillete = $fila['precioBillete'];
                        
                        echo "<div class='caja'>
                                <div class='titulo' onclick='toggleCaja(this)'>{$nombreLinea}: {$localidadOrigenNombre}({$localidadOrigenCiudad}) - {$localidadDestinoNombre}({$localidadDestinoCiudad})</div>
                                    <div class='contenido'>
                                        <table>
                                        <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>Sábados</td>
                                            <td>Domingos y Festivos</td>
                                        </tr>";

                                        $horaSalida = $fila['horaSalida'];
                                        $horaLlegada = $fila['horaLlegada'];

                                        echo "<tr>
                                                <td>{$horaSalida}h - {$horaLlegada}h</td>";

                                        $counter = 1;

                                        while ($fila = mysqli_fetch_assoc($resultadoLineasRutas)) {
                                            $horaSalida = $fila['horaSalida'];
                                            $horaLlegada = $fila['horaLlegada'];

                                            echo "<td>{$horaSalida}h - {$horaLlegada}h</td>";

                                            $counter++;

                                            // Si se han mostrado 3 columnas, pasa a la siguiente fila
                                            if ($counter % 3 == 0) {
                                                echo "</tr><tr>";
                                            }
                                        }

                        echo "          </tr></table>
                                        <a href='https://192.168.1.211/comprarBillete.php?comprar={$codigoLinea}' class='botonesComprar'><p>COMPRAR BILLETES ({$precioBillete}€)<p></a>
                                    </div>
                              </div>";
                    } else {
                        echo "<p>Lo sentimos, se ha producio un error al cargar la Información. Por favor, vuelva a intentarlo más tarde o póngase en contacto através de <a href='https://192.168.1.211/contacto.html'>este enlace</a>. Gracias, y disculpe las molestias.<p>";
                    }
                ?>

                <?php /* LINEA L-2 */
                    session_start();

                    $consultarLineasRutas = "SELECT lineas.codigo AS 'codigoLinea', lineas.nombre AS 'nombreLinea', lo.nombre AS 'localidadOrigenNombre', lo.ciudad AS 'localidadOrigenCiudad', ld.nombre AS 'localidadDestinoNombre', ld.ciudad AS 'localidadDestinoCiudad', DATE_FORMAT(lineas.hora_salida, '%H:%i') AS 'horaSalida', DATE_FORMAT(lineas.hora_llegada, '%H:%i') AS 'horaLlegada', REPLACE(billetes.precio_venta, '.', ',') AS 'precioBillete'
                                             FROM lineas, localidad lo, localidad ld, billetes
                                             WHERE lineas.localidad_origen = lo.codigo AND lineas.localidad_destino = ld.codigo AND lineas.codigo = billetes.codigo AND lineas.nombre LIKE 'L-2'";
                    $resultadoLineasRutas = mysqli_query($enlace, $consultarLineasRutas);

                    if($resultadoLineasRutas) {
                        $fila = mysqli_fetch_assoc($resultadoLineasRutas);

                        $codigoLinea = $fila['codigoLinea'];
                        $nombreLinea = $fila['nombreLinea'];
                        $localidadOrigenNombre = $fila['localidadOrigenNombre'];
                        $localidadOrigenCiudad = $fila['localidadOrigenCiudad'];
                        $localidadDestinoNombre = $fila['localidadDestinoNombre'];
                        $localidadDestinoCiudad = $fila['localidadDestinoCiudad'];
                        $precioBillete = $fila['precioBillete'];
                        
                        echo "<div class='caja'>
                                <div class='titulo' onclick='toggleCaja(this)'>{$nombreLinea}: {$localidadOrigenNombre}({$localidadOrigenCiudad}) - {$localidadDestinoNombre}({$localidadDestinoCiudad})</div>
                                    <div class='contenido'>
                                        <table>
                                        <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>Sábados</td>
                                            <td>Domingos y Festivos</td>
                                        </tr>";

                                        $horaSalida = $fila['horaSalida'];
                                        $horaLlegada = $fila['horaLlegada'];

                                        echo "<tr>
                                                <td>{$horaSalida}h - {$horaLlegada}h</td>";

                                        $counter = 1;

                                        while ($fila = mysqli_fetch_assoc($resultadoLineasRutas)) {
                                            $horaSalida = $fila['horaSalida'];
                                            $horaLlegada = $fila['horaLlegada'];

                                            echo "<td>{$horaSalida}h - {$horaLlegada}h</td>";

                                            $counter++;

                                            // Si se han mostrado 3 columnas, pasa a la siguiente fila
                                            if ($counter % 3 == 0) {
                                                echo "</tr><tr>";
                                            }
                                        }

                        echo "          </tr></table>
                                        <a href='https://192.168.1.211/comprarBillete.php?comprar={$codigoLinea}' class='botonesComprar'><p>COMPRAR BILLETES ({$precioBillete}€)<p></a>
                                    </div>
                              </div>";
                    } else {
                        echo "<p>Lo sentimos, se ha producio un error al cargar la Información. Por favor, vuelva a intentarlo más tarde o póngase en contacto através de <a href='https://192.168.1.211/contacto.html'>este enlace</a>. Gracias, y disculpe las molestias.<p>";
                    }
                ?>

                <?php /* LINEA L-3 */
                    session_start();

                    $consultarLineasRutas = "SELECT lineas.codigo AS 'codigoLinea', lineas.nombre AS 'nombreLinea', lo.nombre AS 'localidadOrigenNombre', lo.ciudad AS 'localidadOrigenCiudad', ld.nombre AS 'localidadDestinoNombre', ld.ciudad AS 'localidadDestinoCiudad', DATE_FORMAT(lineas.hora_salida, '%H:%i') AS 'horaSalida', DATE_FORMAT(lineas.hora_llegada, '%H:%i') AS 'horaLlegada', REPLACE(billetes.precio_venta, '.', ',') AS 'precioBillete'
                                             FROM lineas, localidad lo, localidad ld, billetes
                                             WHERE lineas.localidad_origen = lo.codigo AND lineas.localidad_destino = ld.codigo AND lineas.codigo = billetes.codigo AND lineas.nombre LIKE 'L-3'";
                    $resultadoLineasRutas = mysqli_query($enlace, $consultarLineasRutas);

                    if($resultadoLineasRutas) {
                        $fila = mysqli_fetch_assoc($resultadoLineasRutas);

                        $codigoLinea = $fila['codigoLinea'];
                        $nombreLinea = $fila['nombreLinea'];
                        $localidadOrigenNombre = $fila['localidadOrigenNombre'];
                        $localidadOrigenCiudad = $fila['localidadOrigenCiudad'];
                        $localidadDestinoNombre = $fila['localidadDestinoNombre'];
                        $localidadDestinoCiudad = $fila['localidadDestinoCiudad'];
                        $precioBillete = $fila['precioBillete'];
                        
                        echo "<div class='caja'>
                                <div class='titulo' onclick='toggleCaja(this)'>{$nombreLinea}: {$localidadOrigenNombre}({$localidadOrigenCiudad}) - {$localidadDestinoNombre}({$localidadDestinoCiudad})</div>
                                    <div class='contenido'>
                                        <table>
                                        <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>Sábados</td>
                                            <td>Domingos y Festivos</td>
                                        </tr>";

                                        $horaSalida = $fila['horaSalida'];
                                        $horaLlegada = $fila['horaLlegada'];

                                        echo "<tr>
                                                <td>{$horaSalida}h - {$horaLlegada}h</td>";

                                        $counter = 1;

                                        while ($fila = mysqli_fetch_assoc($resultadoLineasRutas)) {
                                            $horaSalida = $fila['horaSalida'];
                                            $horaLlegada = $fila['horaLlegada'];

                                            echo "<td>{$horaSalida}h - {$horaLlegada}h</td>";

                                            $counter++;

                                            // Si se han mostrado 3 columnas, pasa a la siguiente fila
                                            if ($counter % 3 == 0) {
                                                echo "</tr><tr>";
                                            }
                                        }

                        echo "          </tr></table>
                                        <a href='https://192.168.1.211/comprarBillete.php?comprar={$codigoLinea}' class='botonesComprar'><p>COMPRAR BILLETES ({$precioBillete}€)<p></a>
                                    </div>
                              </div>";
                    } else {
                        echo "<p>Lo sentimos, se ha producio un error al cargar la Información. Por favor, vuelva a intentarlo más tarde o póngase en contacto através de <a href='https://192.168.1.211/contacto.html'>este enlace</a>. Gracias, y disculpe las molestias.<p>";
                    }
                ?>

                <?php /* LINEA L-4 */
                    session_start();

                    $consultarLineasRutas = "SELECT lineas.codigo AS 'codigoLinea', lineas.nombre AS 'nombreLinea', lo.nombre AS 'localidadOrigenNombre', lo.ciudad AS 'localidadOrigenCiudad', ld.nombre AS 'localidadDestinoNombre', ld.ciudad AS 'localidadDestinoCiudad', DATE_FORMAT(lineas.hora_salida, '%H:%i') AS 'horaSalida', DATE_FORMAT(lineas.hora_llegada, '%H:%i') AS 'horaLlegada', REPLACE(billetes.precio_venta, '.', ',') AS 'precioBillete'
                                             FROM lineas, localidad lo, localidad ld, billetes
                                             WHERE lineas.localidad_origen = lo.codigo AND lineas.localidad_destino = ld.codigo AND lineas.codigo = billetes.codigo AND lineas.nombre LIKE 'L-4'";
                    $resultadoLineasRutas = mysqli_query($enlace, $consultarLineasRutas);

                    if($resultadoLineasRutas) {
                        $fila = mysqli_fetch_assoc($resultadoLineasRutas);

                        $codigoLinea = $fila['codigoLinea'];
                        $nombreLinea = $fila['nombreLinea'];
                        $localidadOrigenNombre = $fila['localidadOrigenNombre'];
                        $localidadOrigenCiudad = $fila['localidadOrigenCiudad'];
                        $localidadDestinoNombre = $fila['localidadDestinoNombre'];
                        $localidadDestinoCiudad = $fila['localidadDestinoCiudad'];
                        $precioBillete = $fila['precioBillete'];
                        
                        echo "<div class='caja'>
                                <div class='titulo' onclick='toggleCaja(this)'>{$nombreLinea}: {$localidadOrigenNombre}({$localidadOrigenCiudad}) - {$localidadDestinoNombre}({$localidadDestinoCiudad})</div>
                                    <div class='contenido'>
                                        <table>
                                        <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>Sábados</td>
                                            <td>Domingos y Festivos</td>
                                        </tr>";

                                        $horaSalida = $fila['horaSalida'];
                                        $horaLlegada = $fila['horaLlegada'];

                                        echo "<tr>
                                                <td>{$horaSalida}h - {$horaLlegada}h</td>";

                                        $counter = 1;

                                        while ($fila = mysqli_fetch_assoc($resultadoLineasRutas)) {
                                            $horaSalida = $fila['horaSalida'];
                                            $horaLlegada = $fila['horaLlegada'];

                                            echo "<td>{$horaSalida}h - {$horaLlegada}h</td>";

                                            $counter++;

                                            // Si se han mostrado 3 columnas, pasa a la siguiente fila
                                            if ($counter % 3 == 0) {
                                                echo "</tr><tr>";
                                            }
                                        }

                        echo "          </tr></table>
                                        <a href='https://192.168.1.211/comprarBillete.php?comprar={$codigoLinea}' class='botonesComprar'><p>COMPRAR BILLETES ({$precioBillete}€)<p></a>
                                    </div>
                              </div>";
                    } else {
                        echo "<p>Lo sentimos, se ha producio un error al cargar la Información. Por favor, vuelva a intentarlo más tarde o póngase en contacto através de <a href='https://192.168.1.211/contacto.html'>este enlace</a>. Gracias, y disculpe las molestias.<p>";
                    }
                ?>

                <?php /* LINEA L-5 */
                    session_start();

                    $consultarLineasRutas = "SELECT lineas.codigo AS 'codigoLinea', lineas.nombre AS 'nombreLinea', lo.nombre AS 'localidadOrigenNombre', lo.ciudad AS 'localidadOrigenCiudad', ld.nombre AS 'localidadDestinoNombre', ld.ciudad AS 'localidadDestinoCiudad', DATE_FORMAT(lineas.hora_salida, '%H:%i') AS 'horaSalida', DATE_FORMAT(lineas.hora_llegada, '%H:%i') AS 'horaLlegada', REPLACE(billetes.precio_venta, '.', ',') AS 'precioBillete'
                                             FROM lineas, localidad lo, localidad ld, billetes
                                             WHERE lineas.localidad_origen = lo.codigo AND lineas.localidad_destino = ld.codigo AND lineas.codigo = billetes.codigo AND lineas.nombre LIKE 'L-5'";
                    $resultadoLineasRutas = mysqli_query($enlace, $consultarLineasRutas);

                    if($resultadoLineasRutas) {
                        $fila = mysqli_fetch_assoc($resultadoLineasRutas);

                        $codigoLinea = $fila['codigoLinea'];
                        $nombreLinea = $fila['nombreLinea'];
                        $localidadOrigenNombre = $fila['localidadOrigenNombre'];
                        $localidadOrigenCiudad = $fila['localidadOrigenCiudad'];
                        $localidadDestinoNombre = $fila['localidadDestinoNombre'];
                        $localidadDestinoCiudad = $fila['localidadDestinoCiudad'];
                        $precioBillete = $fila['precioBillete'];
                        
                        echo "<div class='caja'>
                                <div class='titulo' onclick='toggleCaja(this)'>{$nombreLinea}: {$localidadOrigenNombre}({$localidadOrigenCiudad}) - {$localidadDestinoNombre}({$localidadDestinoCiudad})</div>
                                    <div class='contenido'>
                                        <table>
                                        <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>Sábados</td>
                                            <td>Domingos y Festivos</td>
                                        </tr>";

                                        $horaSalida = $fila['horaSalida'];
                                        $horaLlegada = $fila['horaLlegada'];

                                        echo "<tr>
                                                <td>{$horaSalida}h - {$horaLlegada}h</td>";

                                        $counter = 1;

                                        while ($fila = mysqli_fetch_assoc($resultadoLineasRutas)) {
                                            $horaSalida = $fila['horaSalida'];
                                            $horaLlegada = $fila['horaLlegada'];

                                            echo "<td>{$horaSalida}h - {$horaLlegada}h</td>";

                                            $counter++;

                                            // Si se han mostrado 3 columnas, pasa a la siguiente fila
                                            if ($counter % 3 == 0) {
                                                echo "</tr><tr>";
                                            }
                                        }

                        echo "          </tr></table>
                                        <a href='https://192.168.1.211/comprarBillete.php?comprar={$codigoLinea}' class='botonesComprar'><p>COMPRAR BILLETES ({$precioBillete}€)<p></a>
                                    </div>
                              </div>";
                    } else {
                        echo "<p>Lo sentimos, se ha producio un error al cargar la Información. Por favor, vuelva a intentarlo más tarde o póngase en contacto através de <a href='https://192.168.1.211/contacto.html'>este enlace</a>. Gracias, y disculpe las molestias.<p>";
                    }
                ?>

                <?php /* LINEA L-6 */
                    session_start();

                    $consultarLineasRutas = "SELECT lineas.codigo AS 'codigoLinea', lineas.nombre AS 'nombreLinea', lo.nombre AS 'localidadOrigenNombre', lo.ciudad AS 'localidadOrigenCiudad', ld.nombre AS 'localidadDestinoNombre', ld.ciudad AS 'localidadDestinoCiudad', DATE_FORMAT(lineas.hora_salida, '%H:%i') AS 'horaSalida', DATE_FORMAT(lineas.hora_llegada, '%H:%i') AS 'horaLlegada', REPLACE(billetes.precio_venta, '.', ',') AS 'precioBillete'
                                             FROM lineas, localidad lo, localidad ld, billetes
                                             WHERE lineas.localidad_origen = lo.codigo AND lineas.localidad_destino = ld.codigo AND lineas.codigo = billetes.codigo AND lineas.nombre LIKE 'L-6'";
                    $resultadoLineasRutas = mysqli_query($enlace, $consultarLineasRutas);

                    if($resultadoLineasRutas) {
                        $fila = mysqli_fetch_assoc($resultadoLineasRutas);

                        $codigoLinea = $fila['codigoLinea'];
                        $nombreLinea = $fila['nombreLinea'];
                        $localidadOrigenNombre = $fila['localidadOrigenNombre'];
                        $localidadOrigenCiudad = $fila['localidadOrigenCiudad'];
                        $localidadDestinoNombre = $fila['localidadDestinoNombre'];
                        $localidadDestinoCiudad = $fila['localidadDestinoCiudad'];
                        $precioBillete = $fila['precioBillete'];
                        
                        echo "<div class='caja'>
                                <div class='titulo' onclick='toggleCaja(this)'>{$nombreLinea}: {$localidadOrigenNombre}({$localidadOrigenCiudad}) - {$localidadDestinoNombre}({$localidadDestinoCiudad})</div>
                                    <div class='contenido'>
                                        <table>
                                        <tr>
                                            <td>Lunes a Viernes</td>
                                            <td>Sábados</td>
                                            <td>Domingos y Festivos</td>
                                        </tr>";

                                        $horaSalida = $fila['horaSalida'];
                                        $horaLlegada = $fila['horaLlegada'];

                                        echo "<tr>
                                                <td>{$horaSalida}h - {$horaLlegada}h</td>";

                                        $counter = 1;

                                        while ($fila = mysqli_fetch_assoc($resultadoLineasRutas)) {
                                            $horaSalida = $fila['horaSalida'];
                                            $horaLlegada = $fila['horaLlegada'];

                                            echo "<td>{$horaSalida}h - {$horaLlegada}h</td>";

                                            $counter++;

                                            // Si se han mostrado 3 columnas, pasa a la siguiente fila
                                            if ($counter % 3 == 0) {
                                                echo "</tr><tr>";
                                            }
                                        }

                        echo "          </tr></table>
                                        <a href='https://192.168.1.211/comprarBillete.php?comprar={$codigoLinea}' class='botonesComprar'><p>COMPRAR BILLETES ({$precioBillete}€)<p></a>
                                    </div>
                              </div>";
                    } else {
                        echo "<p>Lo sentimos, se ha producio un error al cargar la Información. Por favor, vuelva a intentarlo más tarde o póngase en contacto através de <a href='https://192.168.1.211/contacto.html'>este enlace</a>. Gracias, y disculpe las molestias.<p>";
                    }
                ?>
            </div>
        </main>
        <footer>
            <p>Derechos de autor © 2023 Lineaspase. Todos los derechos reservados.</p>
        </footer>
</body>
</html>