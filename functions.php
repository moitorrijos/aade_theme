<?php

if ( ! defined( 'AADE_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'AADE_VERSION', wp_get_theme()->get('Version') );
}

if ( ! function_exists( 'aade_theme_setup' ) ) {
    
    function aade_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'event-manager-templates' );
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
    wp_enqueue_style( 'aade-google-fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700', array(), AADE_VERSION, 'all' );
    wp_enqueue_style( 'aade_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), AADE_VERSION, 'all' );
    wp_enqueue_style( 'aade_fonts', 'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap', array(), AADE_VERSION, 'all' );
    wp_enqueue_style( 'main_style', get_template_directory_uri() . '/css/main.css', array('aade_fonts', 'aade_bootstrap'), AADE_VERSION, 'all' );
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

// Register Sidebars for header and footer
add_action( 'widgets_init', 'aade_register_sidebars' );
function aade_register_sidebars() {
    register_sidebar(
        array(
            'name'          => __( 'Top Bar Address', 'aade' ),
            'id'            => 'top-bar-address-sidebar',
            'description'   => __( 'Add widgets here to appear in your header.', 'aade' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Top Bar Phone', 'aade' ),
            'id'            => 'top-bar-phone-sidebar',
            'description'   => __( 'Add widgets here to appear in your header.', 'aade' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Top Bar Email', 'aade' ),
            'id'            => 'top-bar-email-sidebar',
            'description'   => __( 'Add widgets here to appear in your header.', 'aade' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        )
    );
    register_sidebars(
        3,
        array(
            'name'          => __( 'Footer %d', 'aade' ),
            'description'   => __( 'Add widgets here to appear in your footer.', 'aade' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
}

require get_template_directory() . '/create-options-page.php';