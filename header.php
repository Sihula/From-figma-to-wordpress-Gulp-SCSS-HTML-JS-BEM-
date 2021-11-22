<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AutoExpress</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

  <!-- <link rel="stylesheet" href="css/style.min.css"> -->
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__top">
       <?php the_custom_logo(); ?>
        <a  href="tel:<?php the_field('phone-number');?>" class="phone"> <?php the_field('phone');?> </a>
      </div>
      <div class="header__content">
        <h1 class="header__title"><?php the_field('main_title') ?></h1>
        <h2 class="header__subtitle"><?php the_field('main_subtitle') ?></h2>
        <p class="header__text"<?php the_field('main_text') ?></p>
        <a href="#" class="button">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social header__social">
          <a href="<?php the_field('instagram-link');?>" class="social__link">
            <img src="<?php bloginfo('template_url')?>/assets/images/icon/instagram.svg" alt="" class="social__img">
          </a>
          <a href="<?php the_field('link_telegram');?>" class="social__link">
            <img src="<?php bloginfo('template_url')?>/assets/images/icon/telegram.svg" alt="" class="social__img">
          </a>
          <a href="<?php the_field('link_whatsapp');?>" class="social__link">
            <img src="<?php bloginfo('template_url')?>/assets/images/icon/whatsapp.svg" alt="" class="social__img">
          </a>
          <a href="<?php the_field('link_facebook');?>" class="social__link">
            <img src="<?php bloginfo('template_url')?>/assets/images/icon/facebook.svg" alt="" class="social__img">
          </a>
          <img src="<?php the_field('main_page_images');?>" alt="" class="header__images">
        </div>

      </div>
    </div>
  </header>