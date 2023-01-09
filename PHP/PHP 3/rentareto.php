<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>RENTA RETO</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" placeholder="Escribe tu Nombre."><br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" placeholder="Escribe tus Apellidos."><br>
    <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Escribe tu Email."><br>
    <label for="bruto">Salario Bruto:</label>
    <input type="number" name="bruto" min="1"><br>
    <label for="ong">Colabora con ONGs</label><input type="checkbox" name="ong"><br>
    <input type="submit" value="Calcular"><br>
</form>

<?php
    if ($_POST){
        $bruto = htmlspecialchars($_POST["bruto"]);
        //print_r($_POST);
        if (isset($_POST["ong"]))
            $casilla = htmlspecialchars($_POST["ong"]);
        else
            $casilla = "off"; // Desmarcada, no ha sido enviada
        $tipo = 0;
        if ($bruto <= 0) {
            echo "<p>Debe introducir su sueldo bruto y ser mayor que cero.";
        }
        elseif ($bruto < 10000) {
            $tipo = 0.05;
        }
        elseif ($bruto < 20000) {
            $tipo = 0.15;
        }
        elseif ($bruto < 35000) {
            $tipo = 0.2;
        }
        elseif ($bruto < 60000) {
            $tipo = 0.3;
        }
        else {
            $tipo = 0.45;
        }
        echo "<p>Bruto: $bruto</p>"; $impositivo=$tipo*100;
        echo "<p>Tipo impositivo aplicado: $impositivo%</p>";
        if (strcmp($casilla,"off")==0)
            $total = $bruto*$tipo;
        else{
            $total = $bruto*$tipo;
            $total = $total - $total*0.02;
        }
        echo "<p>Debe pagar $total € en su declaración</p>";
    }
?>
</body>

</html>