<?php

if ( ! defined( 'AADE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'AADE_VERSION', '1.0.0' );
}


add_action('wp_enqueue_scripts', 'aade_enqueue_styles');

function aade_enqueue_styles(){
    wp_enqueue_style( 'aade_globals', get_template_directory_uri() . '/css/global.css', array(), AADE_VERSION, 'all' );
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main.css', array('aade_globals'), AADE_VERSION, 'all' );
}

add_action( 'after_setup_theme', 'aade_setup' );

function aade_setup(){
    register_nav_menus(
        array(
        'menu-1' => 'Primary',
        'top-menu' => 'Top Menu'
        )
    );
}