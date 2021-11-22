<?php get_header('priv'); ?>

<div class="container">

<h2><?php the_title(); ?></h2>

<?php the_post(); ?>

<?php the_content(); ?>

</div>



  
 <?php get_footer(); ?>