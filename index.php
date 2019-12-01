<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <title>Meloni Ilusalong</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
    
 
    <div class="slider-1">                
        <div class="slide slide1"><img src="https://imgur.com/NQkCmgh.jpg"></div>
        </div>
      
    <div id="Teenused">
        <h1>Teenused</h1>
 
        <div class="slider-2">
            <div><img src="https://i.imgur.com/MmuO0Ma.jpg" id="keelkuuned" class="image"></div>
            <div><img src="https://i.imgur.com/qsIz2yS.jpg"  id="jumestus"  class="image"></div>
            <div><img src="https://i.imgur.com/s0k1g0X.jpg" id="juuksuriteenused" class="image"></div>
            <div><img src="https://i.imgur.com/ItT0fwH.jpg"  id="kosmeetik" class="image"></div>
            <div><img src="https://i.imgur.com/LsWwsN5.jpg"  id="kulripsmed" class="image"></div>
            <div><img src="https://i.imgur.com/homKrsS.jpg" id="manikuur" class="image"></div>
            <div><img src="https://i.imgur.com/F2FwGmt.jpg"  class="image"></div>
            <div><img src="https://i.imgur.com/Oru9058.jpg" id="olaplex" class="image"></div>
            <div><img src="https://i.imgur.com/iAcGI2M.jpg" id="ripsmepikendus" class="image"></div>
            <div><img src="https://i.imgur.com/tavIl68.jpg" id="depilleerimine"class="image"></div>
            <div><img src="https://i.imgur.com/hGbxuey.jpg" id="massaaz" class="image"></div>
           
            
        </div>
    </div>

         <div class="uudised">
        <h1>Uudised</h1>

        
        <?php wp_get_archives('title_li=&type=postbypost&limit=10'); ?>



        </div>



    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
   
   
  

    </body>

</html>

   <?php get_footer();

?>