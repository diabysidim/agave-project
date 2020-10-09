<?php 

function agave_files(){

    wp_enqueue_style('google_font', "//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300&display=swap");
    wp_enqueue_style('agave_main_style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'agave_files')


?>