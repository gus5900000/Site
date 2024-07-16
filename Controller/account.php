<?php
    session_start();
    if(!isset($_SESSION['userId'])) {
        $logMessage = "Vous devez vous connecter pour accéder à cette page";
        header("location: ../Controller/home.php?message=$logMessage");

    } 
    $title = "Compte";
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"],
                ["label" => "Modifier compte", "path" => "../Controller/modifyAccount.php"]
                ];
    include_once("../View/accountView.php");  
?>
