<?php
    session_start();
    include_once("../Model/Model.php");
    $title = "Site de ". $_GET['siteId'];
    $bdd = new Model();

    $site = $bdd->getSiteById($_GET['siteId']);

    $title = "Site de ". $site['city'];

    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"]
                //["label" => "Compte", "path" => "../Controller/account.php"]
            ];

    if(isset($_SESSION['userId'])) {
        $navList[] = ["label" => "Compte", "path" => "../Controller/account.php"];
    }

    $bookList = $bdd->getAllBooks();


    
    include_once("../View/libraryView.php");
?>
