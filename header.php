<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/custom/img/logo.svg" type="image/png">

  <?php wp_head();?>

</head>

<body <?php body_class();?>>

  <?php wp_body_open();?>

  <!--<header class="header__container">

    <div class="header">

      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
        'container' => false,
        'items_wrap' => '<ul class="header__menu">%3$s</ul>'
      ));
      ?>

    </div>

  </header>-->

  <header class="header-container">
    <h1 class="site-logo">
      <a href=""><img src="<?php echo get_stylesheet_directory_uri() ?>/custom/img/logo.svg" alt=""></a>
    </h1>
  </header>