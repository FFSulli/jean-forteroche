<section class="section__synopsis-container">
    <div class="div__synopsis-text">
        <h2 class="div__synopsis-title">Synopsis</h2>
        <p class="div__synopsis-p">Dr. Zoidberg, that doesn’t make sense. But, okay! Daddy Bender, we’re hungry. It’s just like the story of the grasshopper and the octopus.
        All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV.
        But then the winter came, and the grasshopper died, and the octopus ate all his acorns. Also he got a race car.
        Is any of this getting through to you?</p>
        <div class="div__cta">
            <a href="index.php?p=posts.chapters"><button class="div__cta-button">Commencer le roman</button></a>
        </div>
    </div>
    <div class="div__synopsis-gallery">
        <img src="assets/images/alaska-glacier.jpeg" alt="Man in a glacier" class="div__synopsis-image">
    </div>
</section>
<section class="section__home-last-chapters-container">
    <h2 class="div__home-last-chapters-title">Derniers chapitres</h2>
    <div class="div__home-last-chapters">
        <?php foreach($lastThreePosts as $post): ?>
            <div class="div__last-chapters">
                <h2 class="div__chapter-title"><a href="<?= $post->url ?>" class="div__chapter-link"><?= $post->title; ?></a></h2>
                <p class="div__chapter-date">Paru le <?= $post->date ?></p>
                <p class="div__chapter-excerpt"><?= $post->excerpt ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="div__cta">
        <a href="index.php?p=posts.chapters"><button class="div__cta-button">Voir tous les chapitres</button></a>
    </div>
</section>



