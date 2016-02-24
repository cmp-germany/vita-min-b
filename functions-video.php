<?php

// CSS: Video
wp_enqueue_style( 'video', get_template_directory_uri() . '/css/vita-min-b/video.css' );

// JS: Video
wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video.js', null , null, true );

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
  $json     = file_get_contents('http://videos.united-studios.com/api/video_ids_of_kunde.php?kunde=gfke');
  $ids      = json_decode($json);
  $selected = get_post_meta($post_id, 'video-id');
  debug_to_console($selected);
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

}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id, $post, $update ) {
  if ( isset( $_REQUEST['video-id'] ) ) {
      update_post_meta( $post_id, 'video-id', $_REQUEST['book_author'] );
  }
}
add_action( 'save_post', 'wpdocs_save_meta_box' );
