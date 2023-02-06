<?php include "conexionBD.php"; ?>

<?php
    @session_start();
    session_destroy();
    mysqli_close($connexion);
    echo "<script>window.location='login.php'</script>";





    /* © Sergio Bejarano Arroyo */
?>