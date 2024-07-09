<?php
    $title = "Acceuil";
    $navList = [
                ["label" => "Détente", "path" => "../Controller/game.php"],
                ["label" => "Compte", "path" => "../Controller/account.php"]
            ];
    include_once("../View/homeView.php");
?>