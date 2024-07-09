<?php
    include_once("../Model/Model.php");
    $identifier = htmlspecialchars($_POST["identifiant"]);
    $password = htmlspecialchars($_POST["password"]);
    $loginmessage = "";    
    $bdd = new Model();

    $user = $bdd->findUserByIdentifier($identifier);

    var_dump($user);
?>  