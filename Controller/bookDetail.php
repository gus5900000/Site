<?php
    session_start();
    if(!isset($_GET['bookId'])) {
        $adjust = isset($_GET['siteId']) ? "?siteId=".$_GET['siteId'] : "";
        header("location: ../Controller/library.php".$adjust);
    }
    include_once("../Model/Model.php");
    $bdd = new Model();
    $book = $bdd->getBookById($_GET['bookId']);

    $title = $book['title'];
    $navList = [
                ["label" => "Acceuil", "path" => "../Controller/home.php"],
                ["label" => "Détente", "path" => "../Controller/game.php"]
                //["label" => "Compte", "path" => "../Controller/account.php"]
            ];
    if(isset($_SESSION['userId'])) {
        $navList[] = ["label" => "Compte", "path" => "../Controller/account.php"];
    }
        

    include_once("../View/bookDetailView.php");


?>