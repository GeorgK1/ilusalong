<?php get_header();

    while(have_posts()){
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="post-sisu">
            
        </div>
        <?php the_content(); ?>
        
   <?php }
   get_footer();
?>