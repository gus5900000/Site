<?php
    $title = "Compte";
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"],
                ["label" => "Compte", "path" => "../Controller/modifyAccount.php"]
                ];  
    include_once("../View/accountView.php");
?>
