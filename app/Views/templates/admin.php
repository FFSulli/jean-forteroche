<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= App::getInstance()->title; ?></title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Parisienne&display=swap" rel="stylesheet">
  </head>
  <body>
  <header class="header__container">
    <nav class="header__menu">
      <ul class="header__menu-items">
        <li class="header__menu-logo"><a href="index.php" class="header__menu-link">Jean Forteroche</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Chapitres</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Biographie</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Contact</a></li>
        <li class="header__menu-item"><a href="index.php?p=users.login" class="header__menu-link">Connexion</a></li>
      </ul>
    </nav>
  </header>
    <main class="main__content">
      <?= $content; ?>
  </main>
  <footer class="footer__container">
    <ul class="footer__menu-items">
          <li class="footer__menu-logo"><a href="index.php" class="footer__menu-link">Jean Forteroche</a></li>
          <li class="footer__menu-item"><a href="" class="footer__menu-link">Chapitres</a></li>
          <li class="footer__menu-item"><a href="" class="footer__menu-link">Biographie</a></li>
          <li class="footer__menu-item"><a href="" class="footer__menu-link">Contact</a></li>
          <li class="footer__menu-item"><a href="" class="footer__menu-link">Connexion</a></li>
        </ul>
        <p class="footer__copyright">&copy; <?= date("Y") ?> - Jean Forteroche</p>
  </footer>
</html>
