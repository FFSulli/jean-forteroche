<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App::getInstance()->title; ?></title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Parisienne&display=swap" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/496iic3ku9g8yys8xau5jpck0qw8k0szb5ivywncewafblx6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="assets/js/TinyMCE/config.js"></script>
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