<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'main', get_template_directory_uri() . "/css/main.css" );
wp_enqueue_style( 'slick', get_template_directory_uri() . "/css/slick.css" );
wp_enqueue_style( 'slick-theme', get_template_directory_uri() . "/css/slick-theme.css" );
wp_enqueue_style( 'magnific', get_template_directory_uri() . "/css/magnific-popup.css" );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, false );
wp_enqueue_script( 'magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, false );
}
?>