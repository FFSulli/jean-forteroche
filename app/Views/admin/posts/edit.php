<section class="section__admin-edit-container">
    <a href="index.php?p=admin.posts.index" class="section__admin-link">Revenir au Tableau de bord</a>
    <form method="post" class="form__admin-post-edit">
        <input type="text" name="title" placeholder="<?= $post->title ?>" required />
        <div class="div__admin-post-excerpt">
            <h3 class="section__admin-subtitle">Extrait de l'article</h3>
            <textarea name="excerpt" class="textarea__admin-post-excerpt" id="postExcerpt" autocomplete="off"><?= $post->excerpt ?></textarea>
        </div>
        <div class="div__admin-post-content">
            <h3 class="section__admin-subtitle">Article</h3>
            <textarea name="content" class="textarea__admin-post-content" id="postContent" autocomplete="off"><?= $post->content ?></textarea>
        </div>
        <button class="section__admin-post-save-button">Sauvegarder</button>
    </form>
</section>