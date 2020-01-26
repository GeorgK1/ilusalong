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


<div class="wrapper">
    <div class="intro">
        <p>“Meloni Ilusalongi omaniku unistus on pidada salongi, kus iga klient  tunneb ennast tõeliselt hästi”</p>
        <input type="button" onclick="location.href='http://meloni-ilusalong.local/meist/';" value="Loe meist lähemalt..." />
    </div>
    </div>
    </div>

    <section>
        <div class="pakkumised">
        <h2>Pakkumised</h2>
        <?php echo do_shortcode('[do_widget id=recent-posts-widget-with-thumbnails-3 title=false]'); ?>
        </div>
         <div class="uudised">
        <h2>Uudised</h2>        
        <?php echo do_shortcode('[do_widget id=recent-posts-widget-with-thumbnails-2 title=false]'); ?>
        </div>
        <div class="broneerimine">
        <h2>Broneerimine</h2>
        <p>Teenuste hinnakirja ja infot on võimalik leida <a href="http://meloni-ilusalong.local/teenused/">SIIT!</a></p>
        <?php echo do_shortcode('[ninja_form id=2 title=false]'); ?>
        </div>
    </section>


   

    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>

</html>

   <?php get_footer();
?>