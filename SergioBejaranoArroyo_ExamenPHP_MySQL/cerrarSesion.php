<?php include "login.php"; ?>

<?php
    if (isset($GET['submit'])) {
        $_SESSION['usuario'] = NULL;
        $_SESSION['contrasena'] = NULL;
        unset($_SESSION['usuario']);
        unset($_SESSION['contrasena']);

        echo "<script>window.location='login.php'</script>";
    }





    /* © Sergio Bejarano Arroyo */
?>