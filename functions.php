<?php

/**
	 * Simple helper to debug to the console
	 *
	 * @param  object, array, string $data
	 * @return string
	 */
	function debug_to_console( $data ) {

		$output = '<script type="text/javascript">';
		$output .= 'console.log(' . json_encode( $data ) . ');';
    $output .= '</script>';
		echo $output;
	}

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
wp_enqueue_style( 'effekte', get_template_directory_uri() . '/css/vita-min-b/effekte.css' );
wp_enqueue_style( 'raleway', 'https://fonts.googleapis.com/css?family=Raleway' );

// CSS: OnePager
wp_enqueue_style( 'one-pager-css', get_template_directory_uri() . '/css/vita-min-b/one-pager.css' );

// JS: Bootstrap
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'ie10', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array( 'jquery' ), null, true );
// JS: Jasny-Bootstrap
wp_enqueue_script( 'jasny-bootstrap', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array( 'bootstrap-js' ), null, true );
// JS: Superslides
wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/superslides/examples/javascripts/jquery.easing.1.3.js', array( 'jquery' ), null, true );
wp_enqueue_script( 'jquery-animate-enhanced', get_template_directory_uri() . '/superslides/examples/javascripts/jquery.animate-enhanced.min.js', array( 'jquery-easing' ), null, true );
wp_enqueue_script( 'superslides', get_template_directory_uri() . '/superslides/dist/jquery.superslides.js', array( 'jquery-animate-enhanced' ), null, true );
// JS: Skrollr
wp_enqueue_script( 'skrollr', get_template_directory_uri() . '/js/skrollr.min.js', null, null, true );

// JS: Video
wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video.js', null , null, true );


// POST TYPES


// POST TYPE: Superslides

add_action( 'init', 'create_post_type_superslide' );
function create_post_type_superslide() {
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

add_action( 'init', 'create_post_type_video');
function create_post_type_video() {
  register_post_type( 'vb_video',
    array(
      'labels' => array(
        'name' => __( 'Videos' ),
        'singular_name' => __( 'Video' )
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_menu'=> true,
      'show_in_nav_menus' => true,
      'rewrite' => array('slug' => 'video'),
    )
  );
}

// POST TYPE: OnePagerElement

add_action( 'init', 'create_post_type_onepagerelement' );
function create_post_type_onepagerelement() {
  register_post_type( 'vb_onepagerelement',
    array(
      'labels' => array(
        'name' => __( 'OnePage Elements' ),
        'singular_name' => __( 'OnePage Element' )
      ),
      'public' => true,
      'has_archive' => false,
			'show_in_nav_menus' => false,
      'supports' => array('page-attributes', 'title', 'editor')
    )
  );
}

// TAXONOMY: OnePagerElement Strukturierung

function create_taxonomy_onepagerelement() {
	// create a new taxonomy
	register_taxonomy(
		'vb_onepage',
		'vb_onepagerelement',
		array(
			'label'        => __( 'OnePage Seite' ),
			'rewrite'      => array( 'slug' => 'onepage' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'create_taxonomy_onepagerelement' );

// TAXONOMY: Video Kategorisierung

function create_taxonomy_video_category() {
	// create a new taxonomy
	register_taxonomy(
		'vb_video_category',
		'vb_video',
		array(
			'labels'       => array(
				                  'name'          => 'Video Kategorien',
													'singular_name' => 'Video Kategorie',
													'menu_name'     => 'Video Kategorien',
													'all_items'     => 'Alle Kategorien',
													'edit_item'     => 'Kategorie bearbeiten',
													'view_item'     => 'Video Übersicht',
													// 'update_item' => '',
													// 'add_new_item' => '',
													// 'new_item_name' => '',
													// 'parent_item' => '',
													// 'parent_item_colon' => '',
													// 'search_items' => '',
													// 'popular_items' => '',
													// 'separate_items_with_commas' => '',
													// 'add_or_remove_items' => '',
													// 'choose_from_most_used' => '',
													// 'not_found' => '',
			                  ),
			'rewrite'      => array( 'slug' => 'video-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'create_taxonomy_video_category' );


// OnePagerElement: In der Liste die Order Values anzeigen
function add_new_vb_onepagerelement_column($vb_onepagerelement_columns) {
  $vb_onepagerelement_columns['menu_order'] = "Order";
  return $vb_onepagerelement_columns;
}
add_action('manage_edit-vb_onepagerelement_columns', 'add_new_vb_onepagerelement_column');

function show_order_column($name){
  global $post;

  switch ($name) {
    case 'menu_order':
      $order = $post->menu_order;
      echo $order;
      break;
   default:
      break;
   }
}
add_action('manage_vb_onepagerelement_posts_custom_column','show_order_column');

function order_column_register_sortable($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}
add_filter('manage_edit-vb_onepagerelement_sortable_columns','order_column_register_sortable');


// OnePagerElement: In der Liste die Strukturierung anzeigen
function add_new_vb_onepagerelement_taxonomy_column($vb_onepagerelement_columns) {
  $vb_onepagerelement_columns['vb_onepage'] = "OnePage";
  return $vb_onepagerelement_columns;
}
add_action('manage_edit-vb_onepagerelement_columns', 'add_new_vb_onepagerelement_taxonomy_column');

function show_onepage_column($name){
  global $post;
  switch ($name) {
    case 'vb_onepage':
      echo get_the_terms($post->ID, 'vb_onepage')[0]->name;
      break;
   default:
      break;
   }
}
add_action('manage_vb_onepagerelement_posts_custom_column','show_onepage_column');

function vb_onepage_column_register_sortable($columns){
  $columns['vb_onepage'] = 'vb_onepage';
  return $columns;
}
add_filter('manage_edit-vb_onepagerelement_sortable_columns','vb_onepage_column_register_sortable');


// Menü registrieren

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
  	array(
      'mainmenu' => __( 'Hauptnavigation' ),
      'footermenu' => __( 'Footer Links' )
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
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_56caf57644fb9',
				'label' => 'Standalone Video',
				'name' => 'is-standalone',
				'type' => 'true_false',
				'instructions' => 'Bei einem Standalone Video werden keine weiteren Videos angezeigt.',
				'message' => 'Standalone Video (keine weiteren Videos anzeigen)',
				'default_value' => 0,
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

//Navigationsausgabe: wp-Walker

class My_Nav_Menu_Walker extends Walker_Nav_Menu
{
  function start_lvl( &$output, $depth = 0, $args = array() ) {
      // Depth-dependent classes.
      $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
      $display_depth = ( $depth + 1); // because it counts the first submenu as 0
      $classes = array(
          'sub-menu',
          ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
          ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
          'menu-depth-' . $display_depth
      );
      $class_names = implode( ' ', $classes );

      // Build HTML for output.
      $output .= "\n" . $indent . '<ul class="dropdown-menu navmenu-nav ' . $class_names . '">' . "\n";
  }

  /**
   * Start the element output.
   *
   * Adds main/sub-classes to the list items and links.
   *
   * @param string $output Passed by reference. Used to append additional content.
   * @param object $item   Menu item data object.
   * @param int    $depth  Depth of menu item. Used for padding.
   * @param array  $args   An array of arguments. @see wp_nav_menu()
   * @param int    $id     Current item ID.
   */
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
      global $wp_query;
      $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

      // Depth-dependent classes.
      $depth_classes = array(
          ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
          ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
          ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
          'menu-item-depth-' . $depth
      );
      $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

      // Passed classes.
      $classes = empty( $item->classes ) ? array() : (array) $item->classes;
      $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

      // Build HTML.
      $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

      // Link attributes.
      $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
      $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
      $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
      $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
      $attributes .= 'data-toggle="dropdown" class="menu-link dropdown-toggle ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

      // Build HTML output and pass through the proper filter.
      $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
          $args->before,
          $attributes,
          $args->link_before,
          apply_filters( 'the_title', $item->title, $item->ID ),
          $args->link_after,
          $args->after
      );
      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}
