<?php 

function agave_files(){

    wp_enqueue_style('agave_main_style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'agave_files')


?>