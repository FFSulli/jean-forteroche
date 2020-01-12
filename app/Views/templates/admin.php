<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= App::getInstance()->title; ?></title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Parisienne&display=swap" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/496iic3ku9g8yys8xau5jpck0qw8k0szb5ivywncewafblx6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  </head>
  <body>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: '',
      toolbar: '',
      toolbar_drawer: 'floating',
      language_url : 'assets/js/TinyMCE/fr_FR.js',
      language: 'fr_FR'
    });
  </script>
  <header class="header__container">
    <nav class="header__menu">
      <ul class="header__menu-items">
        <li class="header__menu-logo"><a href="index.php" class="header__menu-link">Jean Forteroche</a></li>
        <li class="header__menu-item"><a href="index.php?p=posts.chapters" class="header__menu-link">Chapitres</a></li>
        <li class="header__menu-item"><a href="index.php?p=biography.show" class="header__menu-link">Biographie</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Contact</a></li>
      </ul>
    </nav>
  </header>
    <main class="main__content">
      <?= $content; ?>
  </main>
  <footer class="footer__container">
    <ul class="footer__menu-items">
          <li class="footer__menu-item"><a href="index.php?p=posts.chapters" class="footer__menu-link">Chapitres</a></li>
          <li class="footer__menu-item"><a href="index.php?p=biography.show" class="footer__menu-link">Biographie</a></li>
          <li class="footer__menu-item"><a href="" class="footer__menu-link">Contact</a></li>
          <li class="footer__menu-item"><a href="index.php?p=users.login" class="footer__menu-link">Administration</a></li>
        </ul>
        <p class="footer__copyright">&copy; <?= date("Y") ?> - Jean Forteroche</p>
  </footer>
</html>