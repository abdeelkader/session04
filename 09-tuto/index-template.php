<section class="all-cat">
    <h2>explore all themes</h2>
    <div class="filter-cat">
    <a href="index.php" class="cat-filet"> Tous les articles </a>

    <?php foreach($categories as $cat): ?>
        <a href="categories.php?id=<?= $cat['id'] ?>" class"pilule-filtre">

            <?= htmlspecialchars($cat['libelle']) ?>
    </a>
    <?php endforeach; ?>
    </div>
</section>