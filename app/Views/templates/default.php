<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= App::getInstance()->title; ?></title>
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Parisienne&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="header__container">
    <nav class="header__menu">
      <ul class="header__menu-items">
        <li class="header__menu-logo"><a href="index.php" class="header__menu-link">Jean Forteroche</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Chapitres</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Biographie</a></li>
        <li class="header__menu-item"><a href="" class="header__menu-link">Connexion</a></li>
      </ul>
    </nav>
  </div>
    <div class="starter-template" style="padding-top: 100px;">
      <?= $content; ?>
    </div>
</html>
