<?php

function melon_files() {
    wp_enqueue_style('melon-styles', get_stylesheet_uri());
    wp_enqueue_style('slick-slider', '//fonts.googleapis.com/css?family=Poppins&display=swap');
    wp_enqueue_script('melon-js', get_theme_file_uri('app.js'), NULL, '1.0', true);
    wp_enqueue_script('slick-js', get_theme_file_uri('//slick/slick.js'), NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'melon_files');

?>