
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
    <div id="central">
        <main>
            <div class="books-table">
                <div class="title-row">
                    <div class="book-title">Titre</div>
                    <div class="book-author">Auteur</div>
                    <div class="book-genre">Genre</div>
                    <div class="book-year">Année</div>
                </div>
                <?php
                    foreach($bookList as $book) {
                       ?> 
                        <div class="book-row">
                            <a href="../Controller/bookDetail.php?bookId=<?= $book["book_id"] ?>&siteId=<?= $_GET['siteId']?>">
                            <div class="book-title"><?= $book['Titre']?></div>      
                            <div class="book-author"><?= $book['Auteur']?></div>
                            <div class="book-genre"><?= $book['Genre']?></div>
                            <div class="book-year"><?= $book['Date']?></div>
                            </a>
                        </div>
                       <?php
                    }
                ?>
            </div>
        </main>
    </div>
    <?php
        include_once("../_partiels/_footer.php");
    ?>
</body>
</html>