<?php

// FONTS
wp_enqueue_style( 'font-source.sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' );

// CSS
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'left-icons', get_template_directory_uri() . '/css/left-icons.css' );

wp_enqueue_style( 'bewerber-card', get_template_directory_uri() . '/css/vita-min-b/bewerber-card.css' );
wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/vita-min-b/carousel.css' );
wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/vita-min-b/footer.css' );
wp_enqueue_style( 'general', get_template_directory_uri() . '/css/vita-min-b/general.css' );
wp_enqueue_style( 'header', get_template_directory_uri() . '/css/vita-min-b/header.css' );
wp_enqueue_style( 'search-bar', get_template_directory_uri() . '/css/vita-min-b/search-bar.css' );

// JS
wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'ie10', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array( 'jquery' ), null, true );