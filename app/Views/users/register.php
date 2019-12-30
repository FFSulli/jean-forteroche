<?php if($errors): ?>
    <div class="alert alert-danger">
        Merci de compléter les champs
    </div>
<?php endif; ?>

<form method="post">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="text" name="email" placeholder="Adresse e-mail">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="password" name="confirmPassword" placeholder="Confirmez le mot de passe">
    <button class="btn btn-primary">S'inscrire</button>
</form>