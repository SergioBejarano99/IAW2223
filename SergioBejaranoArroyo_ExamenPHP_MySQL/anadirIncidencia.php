<?php include "conexionBD.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Incidencia I.E.S. Antonio Machado</title>

    <meta autor="Sergio Bejarano Arroyo" />

<link rel="stylesheet" href="estilosAnadirIncidencia.css">
<link rel="icon" type="image/png" href="logotipo.png" />
</head>
<body>
    <h1>AÑADIR UNA NUEVA INCIDENCIA EN I.E.S. ANTONIO MACHADO</h1>

    <?php 
        if(isset($_POST['crear'])) {
            $planta = htmlspecialchars($_POST['plantaIntroducida']);
            $aula = htmlspecialchars($_POST['aulaIntroducida']);
            $descripcion = htmlspecialchars($_POST['descripcionIntroducida']);
            $comentario = htmlspecialchars($_POST['comentarioIntroducido']);
            $fecha_alta = htmlspecialchars($_POST['fechaAltaIntroducida']);
            $fecha_rev = htmlspecialchars($_POST['fechaRevisionIntroducida']);
            $fecha_sol = htmlspecialchars($_POST['fechaResolucionIntroducida']);
      
            $consultaInsercionIncidencias = "INSERT INTO incidencias(id, id_planta, id_aula, descripcion, fecha_alta, fecha_rev, fecha_sol, comentario) VALUES(NULL,(SELECT id FROM plantas WHERE nombre LIKE '{$planta}'),(SELECT id FROM aulas WHERE nombre LIKE '{$aula}'),'{$descripcion}','{$fecha_alta}','{$fecha_rev}','{$fecha_sol}','{$comentario}')";

            $insercionIncidencias = mysqli_query($connexion, $consultaInsercionIncidencias);
    
            if (!$insercionIncidencias) {
                $controlErrores = '<span class="insercionErronea">Se ha producido algún Error.</span>';
            } else {
                $controlErrores = '<span class="insercionCorrecta">Se ha añadido correctamente la Incidencia.</span>';
            }         
        }
    ?>

    <div class="formulario">
        <form action="" method="post">
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
                <input type="text" name="descripcionIntroducida" placeholder="Escribe una Descripción.">
            </p><br>
            <p>
                <label>Fecha de Alta:</label>
                <input type="date" name="fechaAltaIntroducida">
            </p><br>
            <p>
                <label>Fecha de Revisión:</label>
                <input type="date" name="fechaRevisionIntroducida">
            </p><br>
            <p>
                <label>Fecha de Resolución:</label>
                <input type="date" name="fechaResolucionIntroducida">
            </p><br>
            <p>
                <label>Comentario:</label><br>
                <textarea name="comentarioIntroducido" cols="30" rows="10" placeholder="(Opcional)"></textarea>
            </p><br>
            <p>
                <input type="submit" name="crear" value="Añadir"><?php echo $controlErrores; ?>
            </p>
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