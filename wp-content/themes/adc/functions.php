<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('linearicons', '//cdn.linearicons.com/free/1.0.0/icon-font.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('font-montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style('font-mada', get_stylesheet_directory_uri().'/assets/fonts/mada/stylesheet.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('magnific-popup-css', get_stylesheet_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('selectric-css', get_stylesheet_directory_uri().'/assets/css/selectric.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri().'/assets/framework/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', array(), '1.0.0', 'all' );

    if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
        // grab the value
        $value = constant( 'ICL_LANGUAGE_CODE' );
        if ( !empty( $value ) ) {
            if ( $value === 'ar' ) {
                wp_enqueue_style('font-almarai', get_stylesheet_directory_uri().'/assets/fonts/almarai/stylesheet.css', array(), '1.0.0', 'all' );
                wp_enqueue_style('ar-style', get_stylesheet_directory_uri().'/ar.css', array(), '1.0.0', 'all' );
            }
        }
    }

    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri().'/assets/framework/js/bootstrap.min.js',  array('jquery'), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script('magnific-popup-js', get_stylesheet_directory_uri().'/assets/js/jquery.magnific-popup.min.js',  array('jquery'), wp_get_theme()->get( 'Version' ), true );
    wp_enqueue_script('selectric-js', get_stylesheet_directory_uri().'/assets/js/jquery.selectric.js',  array('jquery'), wp_get_theme()->get( 'Version' ), true );

}