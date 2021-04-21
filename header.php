<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="style.css"> -->
  <?php wp_head(); ?>
  <!-- <title>Document</title> -->
</head>

<body <?php body_class(); ?>>
  <main>
    <header>
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="img/estramedia__logo.png" alt="">
        </a>
      </div>
      <ul class="menu__pc">
        <li><a href="">HTML</a></li>
        <li><a href="">CSS</a></li>
        <li><a href="">JavaScript</a></li>
        <li><a href="">PHP</a></li>
        <li><a href="">MySQL</a></li>
      </ul>
    </header>