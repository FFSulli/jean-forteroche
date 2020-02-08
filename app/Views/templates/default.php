<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::getInstance()->title; ?></title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600,700|Parisienne&display=swap" rel="stylesheet">
    <script src="assets/js/app.js" defer></script>
  </head>
  <body>
    <header class="nav__container">
      <a href="index.php" class="nav__logo header__menu-link">Jean Forteroche</a>
      <ul class="nav__menu">
        <li><a href="index.php?p=posts.chapters" class="header__menu-link">Chapitres</a></li>
        <li><a href="index.php?p=biography.show" class="header__menu-link">Biographie</a></li>
        <li><a href="index.php?p=contact.show" class="header__menu-link">Contact</a></li>
      </ul>
      <button class="nav__burger">
        <span></span>
      </button>
    </header>
  <div class="hero__container">
    <img src="assets/images/header-bg.png" alt="hero-image" class="hero__background">
    <h1 class="hero__title">Un billet simple pour l'Alaska</h1>
  </div>
  <main class="main__content">
      <?= $content; ?>
  </main>
  <footer class="footer__container">
    <ul class="footer__menu-items">
          <li class="footer__menu-item"><a href="index.php?p=posts.chapters" class="footer__menu-link">Chapitres</a></li>
          <li class="footer__menu-item"><a href="index.php?p=biography.show" class="footer__menu-link">Biographie</a></li>
          <li class="footer__menu-item"><a href="index.php?p=contact.show" class="footer__menu-link">Contact</a></li>
          <li class="footer__menu-item"><a href="index.php?p=users.login" class="footer__menu-link">Administration</a></li>
        </ul>
        <p class="footer__copyright">&copy; <?= date("Y") ?> - Jean Forteroche</p>
  </footer>
</html>
