<h1><?= $article->title; ?></h1>

<p> <?= $article->content; ?></p>

<p><a href="index.php">Home</a></p>

<form method="post" class="form__post-edit">
    <input type="text" name="comment_author" placeholder="Nom d'utilisateur">
    <input type="textarea" name="comment" placeholder="Commentez cet article">
    <button class="btn btn-primary">Envoyer</button>
</form>
<div>
    <?php foreach($comments as $comment): ?>
                <div class="div__chapter">
                    <p><?= $comment->id ?></p>
                    <h3 class="div__chapter-comment"><?= $comment->comment_author ?></h3>
                    <p class="div__chapter-date">Paru le <?= $comment->comment_date ?></p>
                    <p class="div__chapter-excerpt"><?= $comment->comment ?></p>
                </div>
    <?php endforeach; ?>
    <?php var_dump($comment); ?>
</div>