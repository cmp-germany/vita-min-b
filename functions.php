<?php

// FONTS
wp_enqueue_style( 'font-source.sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' );

// CSS
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'left-icons', get_template_directory_uri() . '/css/left-icons.css' );
wp_enqueue_style( 'jasny-bootstrap-css', get_template_directory_uri() . '/css/jasny-bootstrap.min.css' );

wp_enqueue_style( 'bewerber-card', get_template_directory_uri() . '/css/vita-min-b/bewerber-card.css' );
wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/vita-min-b/carousel.css' );
wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/vita-min-b/footer.css' );
wp_enqueue_style( 'general', get_template_directory_uri() . '/css/vita-min-b/general.css' );
wp_enqueue_style( 'header', get_template_directory_uri() . '/css/vita-min-b/header.css' );
wp_enqueue_style( 'search-bar', get_template_directory_uri() . '/css/vita-min-b/search-bar.css' );
wp_enqueue_style( 'slider-default', get_template_directory_uri() . '/superslides/dist/stylesheets/superslides.css' );
wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/vita-min-b/slider.css' );
wp_enqueue_style( 'navigation', get_template_directory_uri() . '/css/vita-min-b/navigation.css' );
wp_enqueue_style( 'general-content', get_template_directory_uri() . '/css/vita-min-b/general-content.css' );


// JS: Bootstrap
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'ie10', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array( 'jquery' ), null, true );
// JS: Jasny-Bootstrap
wp_enqueue_script( 'jasny-bootstrap', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array( 'bootstrap-js' ), null, true );
// JS: Superslides
wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/superslides/examples/javascripts/jquery.easing.1.3.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'jquery-animate-enhanced', get_template_directory_uri() . '/superslides/examples/javascripts/jquery.animate-enhanced.min.js', array( 'jquery-easing' ), null, true );
wp_enqueue_script( 'superslides', get_template_directory_uri() . '/superslides/dist/jquery.superslides.js', array( 'jquery-animate-enhanced' ), null, true );
wp_enqueue_script( 'front-page-slides', get_template_directory_uri() . '/js/front-page-slides.js', array( 'superslides' ), null, true );


//fuer WP-Menue
if ( function_exists('register_nav_menus') ) {
    register_nav_menus(array(
        'main-navi' => __( 'Hauptnavigation' )
    ));
}
