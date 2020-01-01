<?php foreach($posts as $post): ?>

    <h2><a href="<?= $post->url ?>"><?= $post->title; ?></a></h2>
    <p>Extrait</p>

<?php endforeach; ?>