<?php

//Add dynamic title tag support
function luna_theme_support () {
add_theme_support('title-tag');
}
add_action('after_setup_theme', 'luna_theme_support');

//Register and Enqueue Styles.
function luna_register_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.4.1/css/all.css');
}
add_action( 'wp_enqueue_scripts', 'luna_register_styles' );

//Menus
function luna_menus() {

	$locations = array(
		'primary'  => __( 'Header navigation', 'luna' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'luna_menus' );

?>
