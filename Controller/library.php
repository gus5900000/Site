<?php

    if(!isset($_GET['site']) || !in_array($_GET['site'], ["Armentières", "Lille", "Roubaix", "Saint-Omer"])) {
        header("location: ../Controller/home.php");
    }

    $title = "site de ". $_GET['site'];
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"],
                ["label" => "Compte", "path" => "../Controller/account.php"]
            ];
    include_once("../View/libraryView.php");
?>
