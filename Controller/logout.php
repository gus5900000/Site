<?php
    session_start();
    $logMessage = "Au revoir ".$_SESSION['identifiant'];
    session_destroy();
    header("location: ../Controller/home.php?message=$logMessage");
?>