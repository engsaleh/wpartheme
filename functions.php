<?php

function wpartheme_enqueue_styles() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'wpartheme_enqueue_styles');

function wpartheme_enqueue_scripts() {

	wp_enqueue_script( 'jqueryslim', get_template_directory_uri() . '/js/vendor/jquery-3.2.1.slim.min.js' );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/vendor/popper.min.js' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js' );

}

add_action( 'wp_enqueue_scripts', 'wpartheme_enqueue_scripts');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/bootstrap_5_wp_nav_menu_walker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

