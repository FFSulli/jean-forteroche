<section class="section__admin-container">
    <h2 class="section__admin-title">Tableau de bord</h2>
    <h3 class="section__admin-subtitle">Administrer les articles</h3>
    <p><a href="?p=admin.posts.add" class="section__admin-link">Ajouter un nouvel article</a></p>
    <div class="section__admin-posts-header">
        <span class="span__admin-posts-title">Titre</span>
        <span class="span__admin-posts-actions">Actions</span>
    </div>
    <?php foreach($posts as $post): ?>
    <div class="section__admin-post">
        <span class ="span__admin-post-title"><?= $post->title; ?></span>
        <a href="?p=admin.posts.edit&id=<?= $post->id; ?>"><button class="section__admin-post-edit-button">Editer</button></a></td>
        <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                <input type="hidden" name="id" value="<?= $post->id; ?>">
                <button type="submit" class="section__admin-post-delete-button">Supprimer</button>
        </form>
    </div>
            <?php endforeach; ?>
</section>