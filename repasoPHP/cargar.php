<?php
if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        
        //Credenciales Mysql
        $Host = ''; //El Nombre del Servidor
        $Username = ''; //Aquí iría el Usuario.
        $Password = ''; //Aquí iría la Contraseña.
        $dbName = ''; //Aquí iría el Nombre de la Base de Datos.
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("INSERT into images_tabla (imagenes, creado) VALUES ('$imgContenido', now())");
        // COndicional para verificar la subida del fichero
        if($insertar){
            echo "Archivo Subido Correctamente.";
            echo "<script>window.location='ver.php'</script>";
        }else{
            echo "Ha fallado la subida, reintente nuevamente.";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "Por favor seleccione imagen a subir.";
    }
}





    /* © Sergio Bejarano Arroyo */
?>