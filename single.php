<?php get_header();

    while(have_posts()){
        the_post(); ?>
        <h1 id="pealkiri-post"><?php the_title(); ?></h1>
      
        <p id="post-sisu"><?php the_content(); ?></p>
        
   <?php }
   


?>
<div class="post-footer"><?php get_footer();?></div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<style>
p {
    font-family: Poppins;
    min-height: 20%;
    
}

#post-sisu{
    font-family: Poppins;
    max-height: 50%;
    
}

#pealkiri-post{
    font-family: Poppins;
    text-transform: capitalize;
    
  
}




</style>