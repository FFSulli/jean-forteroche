<h1>Tableau de bord</h1>

<h2>Administrer les articles</h2>

<p><a href="?p=admin.posts.add" class="">Ajouter</a></p>

<table class="table">

    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>

            <td><?= $post->id; ?></td>
            <td><?= $post->title; ?></td>
            <td>
                <a href="?p=admin.posts.edit&id=<?= $post->id; ?>"><button class="admin__delete-edit-btn">Editer</button></a>
                <form action="?p=admin.posts.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $post->id; ?>">
                    <button type="submit" class="admin__delete-post-btn">Supprimer</button>
                </form>
            </td>

        <?php endforeach; ?>
    </tbody>

</table>