<div class="section__post-container">
    <a href="index.php" class="link__home">Retour à l'accueil</a>
    <p class="section__post-title">Lire les chapitres</p>
</div>
<section class="section__chapters-container">
    <div class="div__chapters-list">
        <?php foreach($posts as $post): ?>
            <div class="div__chapter">
                <h2 class="div__chapter-title"><a href="<?= $post->url ?>" class="div__chapter-link"><?= $post->title; ?></a></h2>
                <p class="div__chapter-date">Paru le <?= $post->date ?></p>
                <p class="div__chapter-excerpt"><?= $post->excerpt ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>