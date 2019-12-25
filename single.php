<?php get_header();

    while(have_posts()){
        the_post(); ?>
        <h1 id="pealkiri"><?php the_title(); ?></h1>
      
        <p id="post-sisu"><?php the_content(); ?></p>
        
   <?php }
   get_footer();
?>