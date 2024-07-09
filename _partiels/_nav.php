<nav>
    <?php
    foreach($navList as $navItem) {
        ?>
        
        <a href="<?= $navItem['path'] ?> " target="_self" class="button"><?= $navItem['label'] ?> </a>

        <?php
    }
    ?>
</nav>