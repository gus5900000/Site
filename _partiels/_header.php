<header class="header">
    <div id="header-top">
        <div id="header-logo">
            <img id="logo" src="../assets/logo.png" alt="logo">
        </div>
        <div id="header-titre">
            <h1>Silence on lit</h1>
            <h3><?= $title?></h3>
        </div>
        <div id="header-login">
            <?php
                if(isset($_SESSION['userId'])) {
                    ?>
                    <p>Bonjour <?= $_SESSION['identifiant'] ?></p>

                    <a href="../Controller/logout.php" class="button">Se déconnecter</a>

                    <?php
                } else {

                    ?>
                    <form action="../Controller/login.php" method="post">
                        <label for="identifiant">Identifiant</label>
                        <input type="text" id="identifiant" name="identifiant" placeholder="Mettez votre identifiant">

                        <label for="password">Mot de passe</label>
                        <input type="password" id="password" name="password" placeholder="Mettez votre mdp">

                        <p class="alertMessage"> <?php echo (isset($_GET['message'])? ($_GET['message']): "") ?> </p>
                        <input type="submit" value="Se connecter">

                    </form>
                    <?php
                }
            ?>
        </div>
    </div>
    <div id="header-bottom">

    </div>
</header>