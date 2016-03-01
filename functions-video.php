<?php

// CSS: Video
wp_enqueue_style( 'video', get_template_directory_uri() . '/css/vita-min-b/video.css' );

// JS: Video
wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video.js', null , null, true );


// ADMIN JS
function enqueue_admin_js($hook) {
    if ( 'edit.php' != $hook ) {
        return;
    }
    wp_enqueue_script( 'ms_dropdown_js', get_template_directory_uri() . '/js/jquery.dd.min.js' );
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin_js' );

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

// Custom Query Var: Video Embedded
//
// function add_query_var_m( $vars ){
//   $vars[] = "m";
//   return $vars;
// }
// add_filter( 'query_vars', 'add_query_var_m' );


// Advanced Custom Fields

//define( 'ACF_LITE', true );
include_once('advanced-custom-fields/acf.php');

// if(function_exists("register_field_group"))
// {
// 	register_field_group(array (
// 		'id' => 'acf_video-details',
// 		'title' => 'Video Details',
// 		'fields' => array (
// 			array (
// 				'key' => 'field_56a65e24821b3',
// 				'label' => 'Video ID',
// 				'name' => 'video-id',
// 				'default_value' => '',
// 				'placeholder' => '',
// 				'prepend' => '',
// 				'append' => '',
// 				'formatting' => 'none',
// 				'maxlength' => '',
// 			),
// 			array (
// 				'key' => 'field_56caf57644fb9',
// 				'label' => 'Standalone Video',
// 				'name' => 'is-standalone',
// 				'type' => 'true_false',
// 				'instructions' => 'Bei einem Standalone Video werden keine weiteren Videos angezeigt.',
// 				'message' => 'Standalone Video (keine weiteren Videos anzeigen)',
// 				'default_value' => 0,
// 			),
// 		),
// 		'location' => array (
// 			array (
// 				array (
// 					'param' => 'post_type',
// 					'operator' => '==',
// 					'value' => 'vb_video',
// 					'order_no' => 0,
// 					'group_no' => 0,
// 				),
// 			),
// 		),
// 		'options' => array (
// 			'position' => 'normal',
// 			'layout' => 'no_box',
// 			'hide_on_screen' => array (
// 			),
// 		),
// 		'menu_order' => 0,
// 	));
// }


// VIDEO META BOX ////////////////

//Options Page for Video Meta Box

add_action('admin_init', 'sandbox_initialize_theme_options');
function sandbox_initialize_theme_options() {
  add_settings_section(
    'united_studios_menu_section',     // ID used to identify this section and with which to register options
    'United Studios Videos',          // Title to be displayed on the administration page
    'united_studios_menu_section', // Callback used to render the description of the section
    'writing'               // Page on which to add this section of options
  );

  // Next, we will introduce the fields for toggling the visibility of content elements.
  add_settings_field(
    'kunden-id',                      // ID used to identify the field throughout the theme
    'Kunden ID',                           // The label to the left of the option interface element
    'united_studios_text_callback',   // The name of the function responsible for rendering the option interface
    'writing',                          // The page on which this option will be displayed
    'united_studios_menu_section',         // The name of the section to which this field belongs
    array()
  );

  // Finally, we register the fields with WordPress
  register_setting(
    'writing',
    'kunden-id'
  );
} // end sandbox_initialize_theme_options

function united_studios_text_callback($args) {

  // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field
  $html = '<input type="text" id="kunden-id" name="kunden-id" value="' . get_option('kunden-id') . '" />';

  if (isset($args['label'])) {
    $html .= '<label for="kunden-id"> '  . $args['label'] . '</label>';
  }

  echo $html;

} // end sandbox_toggle_header_callback

function united_studios_menu_section() {
  echo '<p>Gib hier die entsprechenden Daten ein, damit die Verbindung zum Videoportal von United Studios funktioniert.</p>';
}

/**
 * Register meta box(es).
 */
function wpdocs_register_meta_box_video() {
    add_meta_box( 'meta-box-video', __( 'Video Details', 'Video Details Custom Post Type' ), 'wpdocs_display_callback_video', 'vb_video' );
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_box_video' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wpdocs_display_callback_video( $post ) {
  //get_option('kunden-id')
  if ( get_option('kunden-id') == "" ) {

    echo '<p>Bitte gebe unter <a href="options-writing.php#kunden-id">Einstellungen › Schreiben</a> die nötigen Daten für die Kommunikation mit der United - Studios Video Plattform an.</p>';

  } else {

    $json      = file_get_contents('http://videos.united-studios.com/api/video_ids_of_kunde.php?kunde=' . get_option('kunden-id'));
    $ids       = json_decode($json);
    $post_meta = get_post_meta($post->ID);
    $selected  = $post_meta['video-id'][0];
    echo '<select name="video-id">';
    foreach ($ids as $id) {
      $output  = '';
      $output .= '<option value="';
      $output .= $id;
      $output .= '" ';
      if ($selected == $id ) {
        $output .= 'selected';
      }
      $output .= '>' . $id . '</option>';
      echo $output;
    }
    echo '</select>';
    echo '<button id="btn1">Test</button>';
    echo '<script>$=jQuery.noConflict();
function createByJson() {
	var jsonData = [
					{description:"Choos your payment gateway", value:"", text:"Payment Gateway"},
					{image:"../images/msdropdown/icons/Amex-56.png", description:"My life. My card...", value:"amex", text:"Amex"},
					{image:"../images/msdropdown/icons/Discover-56.png", description:"It pays to Discover...", value:"Discover", text:"Discover"},
					{image:"../images/msdropdown/icons/Mastercard-56.png", title:"For everything else...", description:"For everything else...", value:"Mastercard", text:"Mastercard"},
					{image:"../images/msdropdown/icons/Cash-56.png", description:"Sorry not available...", value:"cash", text:"Cash on devlivery", disabled:true},
					{image:"../images/msdropdown/icons/Visa-56.png", description:"All you need...", value:"Visa", text:"Visa"},
					{image:"../images/msdropdown/icons/Paypal-56.png", description:"Pay and get paid...", value:"Paypal", text:"Paypal"}
					];
	var jsn = $("#byjson").msDropDown({byJson:{data:jsonData, name:"payments"}}).data("dd");
}
$(document).ready(function() {
  createByJson();
});
</script>';

  }
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id, $post, $update ) {
  if ( isset( $_REQUEST['video-id'] ) ) {
      update_post_meta( $post_id, 'video-id', $_REQUEST['video-id'] );
  }
}
add_action( 'save_post', 'wpdocs_save_meta_box' );
