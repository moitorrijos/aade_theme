<?php

if ( ! defined( 'AADE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'AADE_VERSION', wp_get_theme()->get('Version') );
}

if ( ! function_exists( 'aade_theme_setup' ) ) {
    
    function aade_theme_setup() {
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        add_theme_support( 'customize-selective-refres-widgets' );

        add_theme_support(
            'custom-logo',
            array(
                'height'			=> 360,
                'width'				=> 60,
                'flex-width' 	=> true,
                'flex-height' => true
            )
        );

        add_theme_support( 'align-wide' );

        add_theme_support( 'wp-block-styles' );

        add_theme_support( 'editor-styles' );
    }

    add_action ( 'after_setup_theme', 'aade_theme_setup' );

}




add_action('wp_enqueue_scripts', 'aade_enqueue_styles');

function aade_enqueue_styles(){
    wp_enqueue_style( 'aade_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), AADE_VERSION, 'all' );
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main.css', array('aade_bootstrap'), AADE_VERSION, 'all' );
    wp_enqueue_script( 'aade_bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), AADE_VERSION, true );
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