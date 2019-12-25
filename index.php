<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Meloni Ilusalong</title>
    

</head>
<body>
    
 
    <div class="slider-1">                
        <div class="slide slide1"><img src="https://imgur.com/NQkCmgh.jpg"></div>
        </div>
      
    <div id="Teenused">
        <h1>Teenused</h1>
 
        <div class="slider-2">
 
        <?php
            echo do_shortcode('[smartslider3 slider=4]');
        ?>
            
        </div>
    </div>

         <div class="uudised">
        <h1 id="uudised">Uudised</h1>        
           <?php echo do_shortcode("[pt_view id=fa7cfbcf0j]"); ?>                       
        </div>



    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    
   
   
  

    </body>

</html>

   <?php get_footer();
