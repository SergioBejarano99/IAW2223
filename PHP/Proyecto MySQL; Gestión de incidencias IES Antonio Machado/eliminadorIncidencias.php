<?php include "conexionBD.php"; ?>

<?php
    if(isset($_GET['eliminar'])) {
        $id= htmlspecialchars($_GET['eliminar']);
        $query = "DELETE FROM incidencia WHERE id = {$id}"; 
        $delete_query= mysqli_query($connexion, $query);
        
        echo "<script>window.location='controlIncidencias.php';</script>";
    }





    /* © Sergio Bejarano Arroyo */
?>