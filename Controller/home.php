<?php
    session_start();
    $title = "Acceuil";
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"]
                //["label" => "Compte", "path" => "../Controller/account.php"]
            ];

    if(isset($_SESSION['userId'])) {
        $navList[] = ["label" => "Compte", "path" => "../Controller/account.php"];
    }

    include_once("../View/homeView.php");
?>