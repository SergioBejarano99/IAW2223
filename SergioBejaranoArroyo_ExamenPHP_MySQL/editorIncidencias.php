<?php include "conexionBD.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Incidencias I.E.S Antonio Machado</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <link rel="stylesheet" href="estilosEditorIncidencias.css">
    <link rel="icon" type="image/png" href="logotipo.png" />
</head>
<body>
    <h1>EDITOR INCIDENCIAS I.E.S. ANTONIO MACHADO</h1>

    <div class="cajaPrincipal">

    <?php
        if(isset($_GET['editar'])) {
            $idIncidencia = htmlspecialchars($_GET['editar']);
        }

        $consultarIncidenciaPorID = "SELECT incidencias.id, plantas.nombre AS 'planta', aulas.nombre AS 'aula', incidencias.descripcion, incidencias.fecha_alta, incidencias.fecha_rev, incidencias.fecha_sol, incidencias.comentario, usuarios.email FROM incidencias, plantas, aulas, usuarios WHERE incidencias.id_planta = plantas.id AND incidencias.id_aula = aulas.id AND incidencias.idUsuario = usuarios.id AND incidencias.id = $idIncidencia";
        $consultaBD = mysqli_query($connexion, $consultarIncidenciaPorID);

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
                </tr>';

        while($fila = mysqli_fetch_assoc($consultaBD)) {
            $id = $fila['id'];                
            $planta = $fila['planta'];        
            $aula = $fila['aula'];         
            $descripcion = $fila['descripcion'];        
            $fecha_alta = $fila['fecha_alta'];        
            $fecha_rev = $fila['fecha_rev'];        
            $fecha_sol = $fila['fecha_sol'];        
            $comentario = $fila['comentario'];
            $email = $fila['email'];
            
            echo "<tr>";
                echo "<td class='datos'>{$planta}</td>";
                echo "<td class='datos'>{$aula}</td>";
                echo "<td class='datos'>{$descripcion}</td>";
                echo "<td class='datos'>{$fecha_alta}</td>";
                echo "<td class='datos'>{$fecha_rev}</td>";
                echo "<td class='datos'>{$fecha_sol}</td>";
                echo "<td class='datos'>{$comentario}</td>";
                echo "<td class='datos'>{$email}</td>";
            echo "</tr>";
        }

        echo "</table>";

        if(isset($_POST['editar'])) {
            $planta = htmlspecialchars($_POST['plantaIntroducida']);
            $aula = htmlspecialchars($_POST['aulaIntroducida']);
            $descripcion = htmlspecialchars($_POST['descripcionIntroducida']);
            $fecha_alta = htmlspecialchars($_POST['fechaAltaIntroducida']);
            $fecha_rev = htmlspecialchars($_POST['fechaRevisionIntroducida']);
            $fecha_sol = htmlspecialchars($_POST['fechaResolucionintroducida']);
            $comentario = htmlspecialchars($_POST['comentarioIntroducido']);

            $consultaActualizacion = "UPDATE incidencias SET id_planta = (SELECT id FROM plantas WHERE nombre LIKE '{$planta}'), id_aula = (SELECT id FROM aulas WHERE nombre LIKE '{$aula}'), descripcion = '{$descripcion}', fecha_alta = '{$fecha_alta}', fecha_rev = '{$fecha_rev}', fecha_sol = '{$fecha_sol}', comentario = '{$comentario}' WHERE id = {$id}";
            $actualizarIncidencia = mysqli_query($connexion, $consultaActualizacion);

            echo "<script>window.location='editorIncidencias.php?editar={$id}'</script>";

            if (!$actualizarIncidencia) {
                $controlErrores = '<span class="actualizaconErronea">No se ha podido modificar la Incidencia</span>';
            } else {
                $controlErrores = '<span class="actualizacionCompletada">Se ha modificado correctamente la Incidencia.</span>';
            }
        }

        mysqli_close($connexion);
    ?>
    </div>

    <div class="formulario">  
        <form action="" method="post">
            <p>
                <h3>¿Modificar la siguiente Incidencia?:</h3>
            </p><br>
            <p>
                <label>Autor:</label>
                <input type="text" name="" value="<?php echo $email ?>" disabled>
            </p><br>
            <p>
                <label>Planta:</label>
                <select name="plantaIntroducida" class="plantas">
                    <option value="baja">Baja</option>
                    <option value="primera">Primera</option>
                    <option value="segunda">Segunda</option>
                </select>
            </p><br>
            <p>
                <label>Aula:</label>
                <select class="aulas" name="aulaIntroducida">
                    <option value="1 ESO">1 ESO</option>
                    <option value="2 ESO">2 ESO</option>
                    <option value="3 ESO">3 ESO</option>
                    <option value="4 ESO">4 ESO</option>
                    <option value="1 BACHILLERATO">1 BACHILLERATO</option>
                    <option value="2 BACHILLERATO">2 BACHILLERATO</option>
                    <option value="1 CFGS">1 CFGS</option>
                    <option value="2 CFGS">2 CFGS</option>
                    <option value="Direccion">Dirección</option>
                    <option value="Sala de Profesores">Sala Profesores</option>
                    <option value="Consejeria">Consejería</option>
                    <option value="Secretaria">Secretaría</option>
                    <option value="SUM">SUM</option>
                    <option value="CPD">CPD</option>
                </select>
            </p><br>
            <p>
                <label>Descripción:</label>
                <input type="text" name="descripcionIntroducida" value="<?php echo $descripcion ?>">
            </p><br>
            <p>
                <label>Descripción:</label>
                <input type="text" name="descripcionIntroducida" value="<?php echo $descripcion ?>">
            </p><br>
            <p>
                <label>Fecha de Alta:</label>
                <input type="date" name="fechaAltaIntroducida" value="<?php echo $fecha_alta ?>">
            </p><br>
            <p>
                <label>Fecha de Revisión:</label>
                <input type="date" name="fechaRevisionIntroducida" value="<?php echo $fecha_rev ?>">
            </p><br>
            <p>
                <label>Fecha de Resolución:</label>
                <input type="date" name="fechaResolucionintroducida" value="<?php echo $fecha_sol ?>">
            </p><br>
            <p>
                <label>Comentario:</label><br>
                <textarea name="comentarioIntroducido" cols="30" rows="10"><?php echo $comentario ?></textarea>
            </p><br>
            <p>
                <input type="submit" name="editar" value="Actualizar Incidencia"><?php echo $controlErrores; ?>
            </p><br>
        </form>
    </div>

    <a href="controlIncidencias.php">
        <button>Volver</button>
    </a>

    <footer>
        <p>© Sergio Bejarano Arroyo - 2023</p>
    </footer>
</body>
</html>