<?php if($errors): ?>
    <div class="div__warning">
        <p class="div__warning-text">Merci de remplir tous les champs</p>
    </div>
<?php endif; ?>

<section class="section__admin-edit-container">
    <a href="index.php?p=admin.posts.index" class="section__admin-link">Revenir au Tableau de bord</a>
    <form method="post" class="form__admin-post-edit">
        <label for="title"><h3 class="section__admin-subtitle">Titre de l'article</h3></label>
        <input type="text" name="title" value="<?php if(isset($_POST['save'])) { echo htmlentities($_POST['title']);} ?>" autocomplete="off"/>
        <div class="div__admin-post-excerpt">
            <h3 class="section__admin-subtitle">Extrait de l'article</h3>
            <textarea name="excerpt" class="textarea__admin-post-excerpt" id="postExcerpt " autocomplete="off"><?php if(isset($_POST['save'])) { echo htmlentities($_POST['excerpt']);} ?></textarea>
        </div>
        <div class="div__admin-post-content">
            <h3 class="section__admin-subtitle">Article</h3>
            <textarea name="content" class="textarea__admin-post-content" id="postContent" contenteditable="true" autocomplete="off"><?php if(isset($_POST['save'])) { echo htmlentities($_POST['content']);} ?></textarea>
        </div>
        <input type="submit" name=save class="section__admin-post-save-button" value="Sauvegarder" />
    </form>
</section>