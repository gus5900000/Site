<?php
    $title = "Compte";
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"],
                ["label" => "Modifier compte", "path" => "../Controller/modifyAccount.php"]
                ];
    include_once("../View/accountView.php");  
?>
