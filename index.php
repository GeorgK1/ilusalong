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
        <p class="estonian">“Meloni Ilusalongi omaniku unistus on pidada salongi, kus iga klient  tunneb ennast tõeliselt hästi”</p>
        <p class="english">“The Melon Beauty Salon owner's dream is to have a salon where every client can feel relaxed and truly well”</p>
        <p class="russian">“Мечта владельца салона красоты Melon - иметь салон, где каждый клиент чувствует себя действительно хорошо”</p>
        <p class="finnish">“Melon-kauneussalongin omistajan unelma on salonki, jossa jokainen asiakas tuntuu todella hyvältä”</p>
        <input type="button" onclick="location.href='http://meloni-ilusalong.local/meist/';" value="Loe meist lähemalt..." />
    </div>
    </div>
    </div>

    <section>
        <div class="pakkumised">
        <h2 class="estonian">Pakkumised</h2>
        <h2 class="english">Offers</h2>
        <h2 class="finnish">Tarjoukset</h2>
        <h2 class="russian">Предложения</h2>
        <?php echo do_shortcode('[do_widget id=recent-posts-widget-with-thumbnails-3 title=false]'); ?>
        </div>
         <div class="uudised">
        <h2 class="estonian">Uudised</h2> 
        <h2 class="english">News</h2>   
        <h2 class="finnish">Uutiset</h2>   
        <h2 class="russian">Новости</h2>          
        <?php echo do_shortcode('[do_widget id=recent-posts-widget-with-thumbnails-2 title=false]'); ?>
        </div>
        <div class="broneerimine">
        <h2 class="estonian">Broneerimine</h2>
        <h2 class="english">Booking</h2>
        <h2 class="finnish">Varaus</h2>
        <h2 class="russian">Бронирование</h2>
        <p>Teenuste hinnakirja ja infot on võimalik leida <a href="http://meloni-ilusalong.local/teenused/">SIIT!</a></p>
        <div class="form">
        <?php echo do_shortcode('[ninja_form id=2 title=false]'); ?>
        </div>
        </div>
    </section>

    <div class="flag-container">
   <input type="image" onclick="eng()" class="flags" src="https://i.imgur.com/UtoAnUF.png" alt="Submit Form" />
   <input type="image" onclick="est()" class="flags" src="https://i.imgur.com/Aa6aupq.png" alt="Submit Form" />
   <input type="image" onclick="fin()" class="flags" src="https://i.imgur.com/UUH5uth.png" alt="Submit Form" />
   <input type="image" onclick="rus()" class="flags" src="https://i.imgur.com/zVgY0lJ.png" alt="Submit Form" />
   </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    </body>

</html>

   <?php get_footer();
?>