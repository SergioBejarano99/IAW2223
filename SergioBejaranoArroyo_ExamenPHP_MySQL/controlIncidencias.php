<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Incdidencias I.E.S. Antonio Machado</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <link rel="stylesheet" href="estilosControlIncidencias.css">
    <link rel="icon" type="image/png" href="logotipo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Administración
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="anadirUsuario.php">Añadir usuario</a></li>
            <li><a class="dropdown-item" href="cerrarSesion.php">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <h1>CONTROL DE INCIDENCIAS DEL I.E.S. ANTONIO MACHADO</h1>
    <div class="cajaPrincipal">
        <?php
        function limpiadoHtml($datos)
        {
            $datos = trim($datos);
            $datos = stripslashes($datos);
            $datos = htmlspecialchars($datos);
            return ($datos);
        }

        $servername = ""; //Aquí iría el Nombre del Servidor.
        $bd = ""; //Aquí iría el Nombre de la Base de Datos.
        $usuario = ""; //Aquí iría el Usuario.
        $password = ""; //Aquí iría la Contaseña.

        $enlace = mysqli_connect($servername, $usuario, $password, $bd);

        if (!$enlace) {
            echo mysqli_connect_error();
        } else {
            session_start();
            $consultarTodo = "SELECT incidencias.id AS 'id', plantas.nombre AS 'planta', aulas.nombre AS 'aula', incidencias.descripcion, incidencias.fecha_alta, incidencias.fecha_rev, incidencias.fecha_sol, incidencias.comentario, usuarios.email FROM incidencias, plantas, aulas, usuarios WHERE incidencias.id_planta = plantas.id AND incidencias.id_aula = aulas.id AND incidencias.idUsuario = usuarios.id;";
            
            $resultado = mysqli_query($enlace, $consultarTodo/*, $ultimaConexionUsuario*/);

            $ultimaConexionUsuario = "SELECT id, usuario, ultimaConexion FROM usuarios";
            $conexionUsuario = mysqli_query($enlace, $ultimaConexionUsuario);

            if ($resultado && $conexionUsuario) {
                echo '<table class="tablaIncidencias">';
                echo    '<tr>
                            <td class="tituloColumna">Planta:</td>
                            <td class="tituloColumna">Aula:</td>
                            <td class="tituloColumna">Descripción:</td>
                            <td class="tituloColumna">Fecha de Alta:</td>
                            <td class="tituloColumna">Fecha de Revisión:</td>
                            <td class="tituloColumna">Fecha de Resolución:</td>
                            <td class="tituloColumna">Comentario:</td>
                            <td class="tituloColumna">Email:</td>
                            <td class="tituloColumna">Acciones:</td>
                        </tr>';

                $totalFilas = 0;

                while ($row = mysqli_fetch_array($resultado)) {
                    $id = $row['id'];
                    $planta = $row['planta'];
                    $aula = $row['aula'];
                    $descripcion = $row['descripcion'];
                    $fecha_alta = $row['fecha_alta'];
                    $fecha_rev = $row['fecha_rev'];
                    $fecha_sol = $row['fecha_sol'];
                    $comentario = $row['comentario'];
                    $email = $row['email'];


                    echo "<tr>";
                        echo "<td class='datos'>{$planta}</td>";
                        echo "<td class='datos'>{$aula}</td>";
                        echo "<td class='datos'>{$descripcion}</td>";
                        echo "<td class='datos'>{$fecha_alta}</td>";
                        echo "<td class='datos'>{$fecha_rev}</td>";
                        echo "<td class='datos'>{$fecha_sol}</td>";
                        echo "<td class='datos'>{$comentario}</td>";
                        echo "<td class='datos'>{$email}</td>";
                        echo "<td class='acciones'>
                                <a href='editorIncidencias.php?editar={$id}'>
                                    <img src='iconoEditar.png' title='Editar'></img>
                                </a>
                                <a href='eliminadorIncidencias.php?eliminar={$id}'>
                                    <img src='iconoPapelera.png' title='Eliminar'></img>
                                </a>
                             </td>";
                    echo "</tr>";
                    
                             $totalFilas++;
                }
                echo '</table>';

                echo '<p class="totalFilas">Total de Incidencias registradas: ' . $totalFilas . '<p>';
                echo '<a href="anadirIncidencia.php"><button>Añadir una nueva Incidencia</button></a>';
            }
        }    
        ?>
    </div>

    <footer>
        <p>© Sergio Bejarano Arroyo - 2023</p>
    </footer>
</body>
</html>