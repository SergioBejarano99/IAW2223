<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>

    <meta autor="Sergio Bejarano Arroyo" />

    <style>
        h1, h3 {
            text-align: center;
        }

        .cajaPrincipal {
            margin: auto;
            width: fit-content;
        }

        .tablaIncidencias, td, tr {
            border-collapse: collapse;
            border: 2.5px #bdbdbd solid
        }

        .tablaIncidencias {
            background-color: rgb(106, 160, 240);
        }

        tr:hover {
            background-color: #a9c1bf;;
        }

        .tituloColumna {
            background-color: black;
            color: white;
            font: oblique bold 15px cursive;
            padding: 5px;
        }

        .datos {
            font-family: monospace;
            padding: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>ESTE ES EL INSTALADOR DE LA BASE DE DATOS</h1>

    <div class="cajaPrincipal">
        <?php
            $servername = ""; //Aquí iría el Nombre del Servidor.
            $bd = ""; //Aquí iría el Nombre de la Base de Datos.
            $usuario = ""; //Aquí iría el Usuario
            $password = ""; //Aquí iría la Contraseña.

            $conexion = mysqli_connect($servername, $usuario, $password, $bd);

            if (!$conexion) {
                die("Conexión fallida con base de datos: " . mysqli_connect_error());
                    echo mysqli_connect_error();
            } else {
                session_start();

                $db = new PDO("mysql:host=$servername;dbname=$bd", $usuario, $password);
                $query = file_get_contents("install.sql");
                $stmt = $db->prepare($query);
                $consultarTodo = "SELECT usuarios.id AS 'id', usuarios.username AS 'username', usuarios.nombre AS 'nombre', usuarios.apellidos AS 'apellidos', usuarios.email AS 'email', usuarios.telefono AS 'telefono', usuarios.rol AS 'rol' FROM usuarios;";
                $resultado = mysqli_query($conexion, $consultarTodo);

                	if ($stmt->execute()){
		                echo "<h3>A continuación se muestra la Base de Datos:</h3>";

                        if ($resultado) {
                            echo '<table class="tablaIncidencias">';
                            echo    '<tr>
                                        <td class="tituloColumna">ID:</td>
                                        <td class="tituloColumna">Usuario:</td>
                                        <td class="tituloColumna">Nombre:</td>
                                        <td class="tituloColumna">Apellidos:</td>
                                        <td class="tituloColumna">Email:</td>
                                        <td class="tituloColumna">Teléfono:</td>
                                        <td class="tituloColumna">Rol:</td>
                                    </tr>';
        
                            $totalFilas = 0;
        
                            while ($row = mysqli_fetch_array($resultado)) {
                                $id = $row['id'];
                                $username = $row['username'];
                                $nombre = $row['nombre'];
                                $apellidos = $row['apellidos'];
                                $email = $row['email'];
                                $telefono = $row['telefono'];
                                $rol = $row['rol'];
        
                                echo "<tr>";
                                    echo "<td class='datos'>{$id}</td>";
                                    echo "<td class='datos'>{$username}</td>";
                                    echo "<td class='datos'>{$nombre}</td>";
                                    echo "<td class='datos'>{$apellidos}</td>";
                                    echo "<td class='datos'>{$email}</td>";
                                    echo "<td class='datos'>{$telefono}</td>";
                                    echo "<td class='datos'>{$rol}</td>";
                                echo "</tr>";
                            
                                $totalFilas++;
                        }
                        echo '</table>';
	                } else {
		                echo "<h3>Error al ejecutar el archivo. (la información proprcionada a continuación no corresponde con el contenido real de la base de datos)<h3>";}
                    }
            }
        ?>
    </div>
</body>
</html>