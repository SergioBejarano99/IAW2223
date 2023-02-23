<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>
<body>
    <h1>SENTENCIAS PREPARADAS</h1>

    <p><strong>¿Qué es una Sentencia Preparada?:</strong></p>
    <p>Una Sentencia Preparada es dividir el Código PHP en varios Fichero, es decir, se realiza la Ejecución del Código PHP en dos Etapas. (En la Primera Etapa se preparan las Sentencias y, en la Segunda Etapa, se llama a los Códigos preparados en la Primera Etapa).</p><br>

    <p><strong>¿Qué Ventajas tiene frente a lo que hemos estudiado en Clase?:</strong></p>
    <p>Mejoran la Seguridad y permiten la Repetición de Sentencias para una Mejora del Rendimiento.</p><br>

    <p>Como Ejemplo, tenemos la siguiente Salida, la cual se realiza al llamar a otro Fichero, que, en este caso es un include del Fichero "conexionBD.php":</p>
    <?php include "conexionBD.php"; ?>
</body>
</html>