
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    include_once("../_partiels/_head.php");
    ?>
</head>

<body>
    <?php
    include_once("../_partiels/_header.php");
    include_once("../_partiels/_nav.php");
    ?>

    <div id="midle">
        <?php
        include_once("../_partiels/_nav.php");
        ?>
        
        <p> <?= $_GET['nom'] ?> </p>

    </div>

    <?php
    include_once("../_partiels/_footer.php");
    ?>

</body>

</html>