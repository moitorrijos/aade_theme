<?php
add_action('wp_enqueue_scripts', 'aade_enqueue_styles');

function aade_enqueue_styles(){
    wp_enqueue_style( 'style', get_stylesheet_uri() );
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