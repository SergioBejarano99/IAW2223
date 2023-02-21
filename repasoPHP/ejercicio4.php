<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>

    <meta autor="Sergio Bejarano Arroyo" />
</head>
<body>
    <h1>CARGAR IMÁGENES EN LA BASE DE DATOS</h1>

      <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
          <label class="col-sm-2 control-label">Archivos</label>
          <div class="col-sm-8">
            <input type="file" class="form-control" id="image" name="image" multiple>
          </div>
          <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
      </form>
</body>
</html>