<?php
    $title = "Acceuil";
    $navList = [
                ["label" => "Détente", "path" => "../Controller/game.php"],
                ["label" => "Compte", "path" => "../Controller/account.php?nom='olivier'&age=35"]
            ];
    include_once("../View/homeView.php");
?>