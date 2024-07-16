<?php
    session_start();
    include_once("../Model/Model.php");
    $identifier = htmlspecialchars($_POST["identifiant"]);
    $password = htmlspecialchars($_POST["password"]);
    $loginmessage = "";    
    $bdd = new Model();

    $user = $bdd->findUserByIdentifier($identifier);

    if (!$user) {
        $loginmessage = "Cet utilisateur n'existe pas";
        header("location: ../Controller/home.php?message=$loginmessage");
    } else if($password === $user["password"]) {
        $_SESSION["userId"] = $user["id"];
        $_SESSION["identifiant"] = $user["firstname"]." ".$user["lastname"];
        
        header("location: ../Controller/account.php");
    } else {
        $loginmessage = "Mot de passe incorrect";
        header("location: ../Controller/home.php?message=$loginmessage");
    }

    var_dump($user);
?> 