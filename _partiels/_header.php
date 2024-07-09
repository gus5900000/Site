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
            <form action="../Controller/login.php" method="post">
                <label for="identifiant">Identifiant</label>
                <input type="text" id="identifiant" name="identifiant" placeholder="Mettez votre identifiant">

                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mettez votre mdp">

                <input type="submit" value="Se connecter">

            </form>
        </div>
    </div>
    <div id="header-bottom">

    </div>
</header>