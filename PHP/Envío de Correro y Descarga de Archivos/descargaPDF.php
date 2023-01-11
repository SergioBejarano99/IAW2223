<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descarga de Archivos</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>

<body>
    <h1>DESCARGA DE ARCHIVO</h1>
</body>
<?php
// Vamos a mostrar un PDF
header('Content-Type: application/pdf');

// Se llamará downloaded.pdf
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// La fuente de PDF se encuentra en original.pdf
readfile('Enunciado de la Práctica.pdf');
?>

</html>