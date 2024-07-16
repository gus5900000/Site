
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

        <main>
            <div class="book-zone">
                <div class="book-title">
                    <a href="../Controller/library.php?siteId=<?= isset($_GET['siteId'])?$_GET['siteId']: 4?>">
                    <button class="button"> Retour </button>
                    </a>
                    <h2><?= $book['title'] ?></h2>
                </div>
                <div class="book-main">
                    <div class="book-cover">
                        <img src="../assets/bookimg/<?= $book['picture'] ?>" alt="Image de couverture du livre.">
                    </div>
                    <div class="book-info">
                        <div class="book-author"> <?= $book['title'] ?> </div>
                        <div class="book-edition"> <?= $book['edition'] ?> </div>
                        <div class="book-format"> <?= $book['format'] ?> </div>
                        <div class="book-pages"> <?= $book['pages'] ?> </div>
                        <div class="book-genre"> <?= $book['genre'] ?> </div>
                        <div class="book-date"> <?= $book['date'] ?> </div>
                        <div class="book-synopsis"> <?= $book['synopsis'] ?> </div>
                        <div class="book-is-available"> 
                            <?= ($book['loan']!== null)? "emprunté":"Disponible" ?> 
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <?php
    include_once("../_partiels/_footer.php");
    ?>

</body>

</html>