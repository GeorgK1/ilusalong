<?php get_header();?>
<input class="navigation" type="button" onclick="location.href='http://meloni-ilusalong.local';" value=" < Tagasi avalehele">
<div class="pealkirjad">
<h2><?php the_title(); ?></h2>

</div>
<div class="page-sisu">

 <?php if(have_posts()) : ?>
    <?php while(have_posts())  : the_post(); ?>
      <h2 id="teenuste-pealkiri"><?php the_title(); ?></h2>                        
      <p id="Sisu"><?php the_content();?></p>           
    <?php endwhile; ?>                   
      <?php else : ?>                       
        <h3><?php _e('404 Error&#58; Not Found'); ?></h3>
<?php endif; ?>      

 
</div>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<?php get_footer();?>
