<?php include "conexionBD.php"; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        input {
            width: 250px;
        }

        input[name="registrarme"] {
            width: 100px;
        }

        input[name="fechaNacimiento"] {
            width: 125px;
        }

        label, input {
            padding: 3px;
            margin: 5px;
        }

        .creacionCorrecta {
            color: green;
        }

        .creacionErronea {
            color: red;
        }
    </style>
</head>
<body>
    <h1>REGISTRO DE USUARIOS</h1>

    <?php
        if(isset($_POST['registrarme'])) {
            $nombreUsuario = htmlspecialchars($_POST['nombreUsuario']);
            $nombre = htmlspecialchars($_POST['nombre']);
            $primerApellido = htmlspecialchars($_POST['primerApellido']);
            $segundoApellido = htmlspecialchars($_POST['segundoApellido']);
            $telefono = htmlspecialchars($_POST['telefono']);
            $dni = htmlspecialchars($_POST['dni']);
            $fechaNacimiento = htmlspecialchars($_POST['fechaNacimiento']);
            $email = htmlspecialchars($_POST['email']);
            $contrasena = htmlspecialchars(md5($_POST['contrasena']));

            $contrasenaCreacion = htmlspecialchars($_POST['contrasena']);

            $consultaAnadirUsuario = "INSERT INTO registros (id, nombreUsuario, nombre, primerApellido, segundoApellido, telefono, dni, fechaNacimiento, email, contrasena) VALUES (NULL, '$nombreUsuario', '$nombre', '$primerApellido', '$segundoApellido', '$telefono', '$dni', '$fechaNacimiento', '$email', '$contrasena')";
            $insercionBD = mysqli_query($conexion, $consultaAnadirUsuario);

            if (!$insercionBD) {
                $controlErrores = '<span class="creacionErronea">No se ha podido añadir el Usuario.</span>';
            } else {
                $controlErrores = '<span class="creacionCorrecta">Usuario creado correctamente.</span>';

                $destinatario = $email;
                $asunto = 'Creación de Usuario para la Práctica MySQL(I)';
                $mensaje = 'Se le ha creado un nuevo Usuario en la Práctica de MySQL(I). A continuación le mostramos los Datos para que pueda Iniciar Sesión:
                                Nombre de Usuario: ' . $nombreUsuario . '
                                Contraseña: '. $contrasenaCreacion;
                mail($destinatario, $asunto, $mensaje);
            }
        } 
    ?>

    <form action="" method="post">
        <label>Nombre de Usuario:</label>
        <input type="text" name="nombreUsuario" placeholder="Escribe tu Nombre de Usuario." required><br>
        <label>Nombre:</label>
        <input type="text" name="nombre" placeholder="Escribe tu Nombre" required><br>
        <label>Primer Apellido:</label>
        <input type="text" name="primerApellido" placeholder="Escribe tu Primer Apellido" required><br>
        <label>Segundo Apellido:</label>
        <input type="text" name="segundoApellido" placeholder="Escribe tu Segundo Apellido." required><br>
        <label>Teléfono:</label>
        <input type="phone" name="telefono" placeholder="Escribe tu Número de Teléfono." required><br>
        <label>DNI:</label>
        <input type="text" name="dni" placeholder="Escribe tu DNI." required><br>
        <label>Fecha de Nacimiento</label>
        <input type="date" name="fechaNacimiento" required><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Escribe tu Corréo Electrónico" required><br>
        <label>Contraseña:</label>
        <input type="password" name="contrasena" placeholder="Escribe una Contraseña."><br>
        <input type="submit" value="Registrarme" name="registrarme"><span><?php echo $controlErrores; ?></span>
    </form>
</body>
</html>