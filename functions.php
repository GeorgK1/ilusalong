<?php

function melon_files() {
    wp_enqueue_style('melon-styles', get_stylesheet_uri());
    wp_enqueue_style('poppins', '//fonts.googleapis.com/css?family=Poppins&display=swap');
    wp_enqueue_script('melon-js', get_theme_file_uri('app.js'), NULL, '1.0', true);
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.11.2/css/all.css');
}    


add_action('wp_enqueue_scripts', 'melon_files');

function ourWidgetsInit(){
    register_sidebar( array (
    'name' => 'Sidebar',
    'id' => 'sidebar1',
    'before_widget' => '<div class = "widgetarea">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));
}







add_action('widgets_init', 'ourWidgetsInit');

?>