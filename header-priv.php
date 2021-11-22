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

  
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__top">
       <?php the_custom_logo(); ?>
        <a  href="tel:<?php the_field('phone-number');?>" class="phone"> <?php the_field('phone');?> </a>
      </div>
     
    </div>
  </header>