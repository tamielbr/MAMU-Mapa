<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'parent-style' ), 999 );
}

//Adds main.css file from child theme /css directory to load after the main theme /css/main.css file
//999 is to lower priority (comes last)
add_action( 'wp_enqueue_scripts', 'call_mamu_style', 999);
function call_mamu_style() {
    wp_enqueue_style( 'child-main', get_stylesheet_directory_uri()."/css/main.css" );
}

?>