<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- <title>Document</title> -->
</head>

<body <?php body_class(); ?>>
  <main>
    <header>
      <div class="logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
        </a>
      </div>
      <ul class="menu__pc">
        <li><a href="<?php echo get_category_link(12); ?>">HTML</a></li>
        <li><a href="<?php echo get_category_link(11); ?>">CSS</a></li>
        <li><a href="<?php echo get_category_link(10); ?>">JavaScript</a></li>
        <li><a href="<?php echo get_category_link(9); ?>">PHP</a></li>
        <li><a href="<?php echo get_category_link(7); ?>">MySQL</a></li>
      </ul>
    </header>