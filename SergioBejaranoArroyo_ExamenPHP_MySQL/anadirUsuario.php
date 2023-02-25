<?php include "conexionBD.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Usuario al Gestor de Incidencias del I.E.S. Antonio Machado</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <link rel="stylesheet" href="estilosAnadirUsuario.css">
    <link rel="icon" type="image/png" href="logotipo.png" />
</head>
<body>
    <h1>AÑADIR NUEVO USUARIO AL CONTROL DE INCIDENCIAS DEL I.E.S. ANTONIO MACHADO</h1>

    <?php
        if(isset($_GET['anadirUsuario'])) {
            $nombreUsuario = htmlspecialchars($_GET['anadirUsuario']);
        }

        if(isset($_POST['anadirUsuario'])) {
            $nombreUsuario = htmlspecialchars($_POST['usuarioIntroducido']);
            $contrasenaUsuario = htmlspecialchars(md5($_POST['contrasenaIntroducida']));
            $emailUsuario = htmlspecialchars($_POST['emailIntroducido']);
            $perfilUusario = htmlspecialchars($_POST['perfilIntroducido']);

            $consultaAnadirUsuario = "INSERT INTO usuarios (id, usuario, contrasena, email, perfil) VALUES (NULL, '{$nombreUsuario}', '{$contrasenaUsuario}', '{$emailUsuario}', '{$perfilUusario}')";
            $insercionBD = mysqli_query($connexion, $consultaAnadirUsuario);

        if (!$insercionBD) {
            $controlErrores = '<span class="creacionErronea">No se ha podido añadir el Usuario.</span>';
        } else {
            $controlErrores = '<span class="creacionCorrecta">Usuario creado correctamente.</span>';
            $destinatario = $emailUsuario;
            $asunto = 'Creación de Usuario.';
            $mensaje = 'Se le ha creado un nuevo Usuario en el Proyecto de MySQL.';
            mail($destinatario, $asunto, $mensaje);
        }
    } 
    ?>
    
    <div class="formulario">  
        <form action="" method="post">
            <p>
                <label>Nombre de Usuario:</label>
                <input type="text" name="usuarioIntroducido" placeholder="Escribe el Nombre de Usuario.">
            </p><br>
            <p>
                <label>Contraseña:</label>
                <input type="password" name="contrasenaIntroducida" placeholder="Escribe la Contraseña.">
            </p><br>
            <p>
                <label>Email:</label>
                <input type="email" name="emailIntroducido" placeholder="Escribe el Correo Electrónico.">
            </p><br>
            <p>
                <label>Tipo de Perfil:</label>
                <select class="tipoPerfil" name="perfilIntroducido">
                    <option value="direccion">Dirección</option>
                    <option value="profesorado">Profesorado</option>
                    <option value="administrador">Administrador</option>
                </select>
            </p>
            <p>
                <input type="submit" name="anadirUsuario" value="Crear Usuario"><?php echo $controlErrores; ?>
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