<section class="section__post-container">
    <h2 class="section__post-title"><?= $article->title; ?></h2>
    <div class="section__post-content"> <?= $article->content; ?></div>
    <p class="section__post-back-home"><a href="index.php" class="section__post-link">Retour à l'accueil</a></p>
</section>
<section class="section__comments-container">
    <h3 class="section__comments-title">Ajouter un commentaire</h3>
    <form method="post" class="form__comments-add">
        <input type="text" name="comment_author" placeholder="Nom d'utilisateur" class="input__comment-author" autocomplete="off">
        <textarea name="comment" placeholder="Commentez cet article" class="textarea__comment-content" autocomplete="off"></textarea>
        <input type="submit" name="add_comment" class="form__cta-button" value="Envoyer" />
    </form>
    <div class="section__comments-display"> 
        <h3 class="section__comments-title">Lire les commentaires</h3>
    <?php foreach($comments as $comment): ?>
            <?php if($comment) { ?>
                    <form method="post" class="form__comments-display">
                        <p class="form__comment-author"><?= $comment->comment_author ?></p>
                        <p class="form__comment-date"><?= $comment->comment_date ?></p>
                        <p class="form__comment-p"><?= $comment->comment ?></p>
                        <input type="submit" class="form__report-button" name="report_comment" value="Signaler le commentaire" />
                        <input type="hidden" name="comment_id" value="<?= $comment->comment_id ?>" />
                    </form>
            <?php } endforeach; ?>
    </div>
</section>