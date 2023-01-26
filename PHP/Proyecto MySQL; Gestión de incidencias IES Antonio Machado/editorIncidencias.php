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

        $consultarIncidenciaPorID = "SELECT * FROM incidencia WHERE id = $idIncidencia";
        $consultaBD = mysqli_query($connexion, $consultarIncidenciaPorID);

        echo '<table class="tablaIncidencias">';
        echo    '<tr>
                    <td class="tituloColumna">ID:</td>
                    <td class="tituloColumna">Planta:</td>
                    <td class="tituloColumna">Aula:</td>
                    <td class="tituloColumna">Descripción:</td>
                    <td class="tituloColumna">Fecha de Alta:</td>
                    <td class="tituloColumna">Fecha de Revisión:</td>
                    <td class="tituloColumna">Fecha de Resolución:</td>
                    <td class="tituloColumna">Comentario:</td>
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
            
            echo "<tr>";
                echo "<td class='datos'>{$id}</tdscope=>";
                echo "<td class='datos'>{$planta}</td>";
                echo "<td class='datos'>{$aula}</td>";
                echo "<td class='datos'>{$descripcion}</td>";
                echo "<td class='datos'>{$fecha_alta}</td>";
                echo "<td class='datos'>{$fecha_rev}</td>";
                echo "<td class='datos'>{$fecha_sol}</td>";
                echo "<td class='datos'>{$comentario}</td>";
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

            $consultaActualizacion = "UPDATE incidencia SET planta = '{$planta}', aula = '{$aula}', descripcion = '{$descripcion}', fecha_alta = '{$fecha_alta}', fecha_rev = '{$fecha_rev}', fecha_sol = '{$fecha_sol}', comentario = '{$comentario}' WHERE id = {$id}";
            $actualizarIncidencia = mysqli_query($connexion, $consultaActualizacion);

            echo "<script>window.location='editorIncidencias.php?editar={$id}'</script>";

            if (!$actualizarIncidencia) {
                $controlErrores = '<span class="actualizaconErronea">No se ha podido modificar la Incidencia</span>';
            } else {
                $controlErrores = '<span class="actualizacionCompletada">Se ha modificado correctamente la Incidencia.</span>';
            }
        } 
    ?>
    </div>

    <div class="formulario">  
        <form action="" method="post">
            <p>
                <h3>¿Modificar la siguiente Incidencia?:</h3>
            </p><br>
            <p>
                <label>Planta:</label>
                <input type="text" name="plantaIntroducida" value="<?php echo $planta ?>">
            </p><br>
            <p>
                <label>Aula:</label>
                <input type="text" name="aulaIntroducida" value="<?php echo $aula ?>">
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