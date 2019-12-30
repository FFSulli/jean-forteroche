<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Mot de passe">
    <button class="btn btn-primary">Envoyer</button>
</form>

<a href="index.php?p=users.register">Vous n'avez pas de compte ? Inscrivez-vous</a>