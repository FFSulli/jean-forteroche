<section class="section__admin-container">
    <h2 class="section__admin-title">Tableau de bord</h2>
    <p><a href="?p=admin.posts.add" class="section__admin-link">Ajouter un nouvel article</a></p>
    <h3 class="section__admin-subtitle">Articles enregistrés</h3>
    <div class="section__admin-posts-header">
        <span class="span__admin-posts-title">Titre</span>
        <span class="span__admin-posts-actions">Actions</span>
    </div>
    <?php foreach($saved_posts as $saved_post): ?>
    <div class="section__admin-post">
        <span class ="span__admin-post-title"><?= $saved_post->title; ?></span>
        <a href="?p=admin.posts.preview&id=<?= $saved_post->id; ?>"><button class="section__admin-post-preview-button">Prévisualiser</button></a></td>
        <a href="?p=admin.posts.edit&id=<?= $saved_post->id; ?>"><button class="section__admin-post-edit-button">Editer</button></a></td>
        <form action="?p=admin.posts.publish" method="post" style="display: inline;">
                <input type="hidden" name="publish_post" value="<?= $saved_post->id; ?>">
                <button type="submit" class="section__admin-post-publish-button">Publier</button>
        </form>
        <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                <input type="hidden" name="delete_post" value="<?= $saved_post->id; ?>">
                <button type="submit" class="section__admin-post-delete-button">Supprimer</button>
        </form>
    </div>
            <?php endforeach; ?>
            
    <h3 class="section__admin-subtitle">Articles publiés</h3>
    <div class="section__admin-posts-header">
        <span class="span__admin-posts-title">Titre</span>
        <span class="span__admin-posts-actions">Actions</span>
    </div>
    <?php foreach($published_posts as $published_post): ?>
    <div class="section__admin-post">
        <span class ="span__admin-post-title"><?= $published_post->title; ?></span>
        <a href="?p=admin.posts.edit&id=<?= $published_post->id; ?>"><button class="section__admin-post-edit-button">Editer</button></a></td>
        <form action="?p=admin.posts.unpublish" method="post" style="display: inline;">
                <input type="hidden" name="unpublish_post" value="<?= $published_post->id; ?>">
                <button type="submit" class="section__admin-post-unpublish-button">Dépublier</button>
        </form>
        <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                <input type="hidden" name="delete_post" value="<?= $published_post->id; ?>">
                <button type="submit" class="section__admin-post-delete-button">Supprimer</button>
        </form>
    </div>
            <?php endforeach; ?>

    <h3 class="section__admin-subtitle">Commentaires signalés</h3>
    <div class="section__admin-posts-header">
        <span class="span__admin-posts-title">Commentaire</span>
        <span class="span__admin-reports-title">Signalements</span>
        <span class="span__admin-posts-actions">Actions</span>
    </div>
    <?php foreach($reported_comments as $reported_comment): ?>
    <div class="section__admin-post">
        <span class ="span__admin-post-title"><?= $reported_comment->comment; ?></span>
        <span class ="span__admin-reports-count"><?= $reported_comment->report_count; ?></span>
        <form action="?p=admin.posts.allow_comment" method="post" style="display: inline;">
                <input type="hidden" name="allow_comment" value="<?= $reported_comment->comment_id; ?>">
                <button type="submit" class="section__admin-post-allow-button">Autoriser</button>
        </form>
        <form action="?p=admin.posts.delete_comment" method="post" style="display: inline;">
                <input type="hidden" name="delete_comment" value="<?= $reported_comment->comment_id; ?>">
                <button type="submit" class="section__admin-post-delete-button">Supprimer</button>
        </form>
    </div>
            <?php endforeach; ?>
</section>