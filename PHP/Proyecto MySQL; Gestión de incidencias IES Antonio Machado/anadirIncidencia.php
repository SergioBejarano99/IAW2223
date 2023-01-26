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
      
            $consultaInsercion= "INSERT INTO incidencia(planta, aula, descripcion, fecha_alta, fecha_rev, fecha_sol, comentario) VALUES('{$planta}','{$aula}','{$descripcion}','{$fecha_alta}','{$fecha_rev}','{$fecha_sol}','{$comentario}')";
            $resultado = mysqli_query($connexion, $consultaInsercion);
    
            if (!$resultado) {
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
                <input type="text" name="plantaIntroducida" placeholder="Escribe la Planta.">
            </p><br>
            <p>
                <label>Aula:</label>
                <input type="text" name="aulaIntroducida" placeholder="Escribe el Aula.">
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