<?php

// FONTS
wp_enqueue_style( 'font-source.sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' );

// CSS
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'left-icons', get_template_directory_uri() . '/css/left-icons.css' );
wp_enqueue_style( 'jasny-bootstrap-css', get_template_directory_uri() . '/css/jasny-bootstrap.min.css' );

wp_enqueue_style( 'video', get_template_directory_uri() . '/css/vita-min-b/video.css' );
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

// JS: Video
wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video.js', null , null, true );


//fuer WP-Menue
if ( function_exists('register_nav_menus') ) {
    register_nav_menus(array(
        'main-navi' => __( 'Hauptnavigation' )
    ));
}



// POST TYPES


// POST TYPE: Superslides

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'vb_superslides',
        array(
            'labels' => array(
                'name' => __( 'Slides' ),
                'singular_name' => __( 'Slide' )
            ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'slide'),
        )
    );
}

// POST TYPE: Videos

add_action( 'init', 'create_post_type2');
function create_post_type2() {
    register_post_type( 'vb_video',
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'Video' )
            ),
        'public' => true,
        'has_archive' => false,
        'show_in_nav_menus' => true,
        'rewrite' => array('slug' => 'video'),
        )
    );
}


// Advanced Custom Fields

//define( 'ACF_LITE', true );
include_once('advanced-custom-fields/acf.php');

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_video-details',
		'title' => 'Video Details',
		'fields' => array (
			array (
				'key' => 'field_56a65e24821b3',
				'label' => 'Video ID',
				'name' => 'video-id',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a74991772b8',
				'label' => 'Header Bild',
				'name' => 'header_bild',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_56a74afd772b9',
				'label' => 'Header Titel',
				'name' => 'header_titel',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a74b3f772ba',
				'label' => 'Header Untertitel',
				'name' => 'header_untertitel',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a74b64772bb',
				'label' => 'Header Button',
				'name' => 'header_button',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a74b82772bc',
				'label' => 'Header Slogan',
				'name' => 'header_slogan',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'vb_video',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

//PLUGINS
//ACF
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_slider',
		'title' => 'Slider',
		'fields' => array (
			array (
				'key' => 'field_56a75bc6e3ae6',
				'label' => 'Slide-Bild',
				'name' => 'slide-img',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_56a75c82e3ae7',
				'label' => 'Headertitel',
				'name' => 'headertitle',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a75cf2e3ae8',
				'label' => 'Subtitel',
				'name' => 'subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a75d17e3ae9',
				'label' => 'Buttonbeschriftung',
				'name' => 'button',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a75d3ce3aea',
				'label' => 'Slogan',
				'name' => 'slogan',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56a786ebc3ba6',
				'label' => 'Buttonlink',
				'name' => 'buttonlink',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'vb_superslides',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
