<?php
    session_start();
    $title = "Compte";
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"]
                //["label" => "Compte", "path" => "../Controller/modifyAccount.php"]
                ];  

    if(isset($_SESSION['userId'])) {
        $navList[] = ["label" => "Compte", "path" => "../Controller/account.php"];
    }
    include_once("../View/accountView.php");
?>
