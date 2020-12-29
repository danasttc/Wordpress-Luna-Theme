<?php

/**
 * Register and Enqueue Styles.
 */

function luna_register_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'luna_register_styles' );


function wpb_load_fa() {
 
wp_enqueue_style( 'wpb-fa', get_stylesheet_directory_uri() . '/fonts/css/font-awesome.min.css' );
 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

    function theme_files(){
        wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');  
    }
    add_action( 'wp_enqueue_scripts', 'theme_files' );


?>