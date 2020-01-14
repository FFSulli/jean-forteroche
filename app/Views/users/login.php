<?php if($errors): ?>
    <div class="div__warning">
        <p class="div__warning-text">Identifiants incorrects</p>
    </div>
<?php endif; ?>

<section class="form__login-container">
    <form method="post" class="form__login">
        <input type="text" name="username" placeholder="Nom d'utilisateur" autocomplete="off" class="form__login-input">
        <input type="password" name="password" placeholder="Mot de passe" autocomplete="off" class="form__login-input">
        <div class="div__cta">
        <button class="div__cta-button">Se connecter</button>
        </div>
    </form>
</section>