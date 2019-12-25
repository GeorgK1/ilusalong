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
    <section>
    <div class="wrapper">
    <div class="intro">
        <p>“Meloni Ilusalongi omaniku unistus on pidada salongi, kus klient iga tunneb ennast tõeliselt hästi”</p>
        <input type="button" onclick="location.href='http://meloni-ilusalong.local/meist/';" value="Loe meist lähemalt..." />
    </div>
    </div>
    </div>
         <div class="uudised">
        <h1 id="uudised">Uudised</h1>        
        <?php dynamic_sidebar('smartslider_area_1'); ?>
    </div>
    </section>


    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>

</html>

   <?php get_footer();
?>