<?php


add_action( 'wp_enqueue_scripts' , 'enqueue_video_frontend_css_js');
function enqueue_video_frontend_css_js() {
  // CSS: Video
  wp_enqueue_style( 'video', get_template_directory_uri() . '/css/vita-min-b/video.css' );

  // JS: Video
  wp_enqueue_script( 'video-js', get_template_directory_uri() . '/js/video.js', null , null, true );
}

// ENQUEUE ADMIN STUFF
function enqueue_admin_js($hook) {
    if ( 'post.php' != $hook ) {
        return;
    }
    wp_enqueue_script( 'ms_dropdown_js',    get_template_directory_uri() . '/js/jquery.dd.min.js' );
    wp_enqueue_style(  'ms_dropdown_css',   get_template_directory_uri() . '/css/dd.css' );
    wp_enqueue_script( 'video_details_js',  get_template_directory_uri() . '/js/video-details.js' );
    wp_enqueue_style(  'video_details_css', get_template_directory_uri() . '/css/video-details.css' );
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
      'menu_icon' => 'dashicons-video-alt3',
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
    add_meta_box( 'meta-box-video-embedded', __( 'Embedded Video', 'Embedded Video Code Creator' ), 'wpdocs_display_callback_video_embedded', 'vb_video', 'side' );
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_box_video' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wpdocs_display_callback_video( $post ) {

  if ( get_option('kunden-id') == "" ) {

    echo '<p>Bitte gebe unter <a href="options-writing.php#kunden-id">Einstellungen › Schreiben</a> die nötigen Daten für die Kommunikation mit der United - Studios Video Plattform an.</p>';

  } else {
    // Get Data for the JSON Object
    $json   = file_get_contents('http://videos.united-studios.com/api/videos_of_kunde.php?kunde=' . get_option('kunden-id'));
    $videos = json_decode($json);

    $selectedIndex = 0;
    $post_meta = get_post_meta($post->ID);
    $selected  = $post_meta['video-id'][0];

    // Build the JSON Object
    $video_array   = array();
    $video_array[] = array(
      'description' => 'Bitte wähle ein Video aus',
      'value'       => '',
      'text'        => 'Video'
    );

    foreach ($videos as $index => $video ) {
      $video_array[] = array(
        'image'       => 'http://videos.united-studios.com/thumbnail.php?file=' . $video->id . '.jpg&width=100',
        'description' => $video->name,
        'value'       => $video->id,
        'text'        => '',
      );
      if ($selected == $video->id) {
        $selectedIndex = $index+1;
      }
    }

    // Output the JSON Object
    ?>
    <div id="byjson"></div>
    <script>
      $=jQuery.noConflict();

      function createByJson(){
        var jsonData = <?= json_encode($video_array, JSON_UNESCAPED_UNICODE) ?>;
        var jsn = $("#byjson").msDropDown({byJson:{data:jsonData, selectedIndex: <?= $selectedIndex ?>, name:"video-id", width: 280}, }).data("dd");
      }
      $(document).ready(function() {
        createByJson();
      });
    </script>

    <?php
  }
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id ) {
  if ( isset( $_REQUEST['video-id'] ) ) {
      update_post_meta( $post_id, 'video-id', $_REQUEST['video-id'] );
  }
}
add_action( 'save_post', 'wpdocs_save_meta_box' );


function wpdocs_display_callback_video_embedded($post) {?>
  <div class="create-embedded-code">
    <h3>Größe</h3>
    <form class="form-breite">
      <ul>
        <li><input type="radio" id="breite-300" class="breite-fixed" name="breite" value="300"> <label for="breite-300">300</label></li>
        <li><input type="radio" id="breite-560" class="breite-fixed" name="breite" value="560" checked="checked"> <label for="breite-560">560</label></li>
        <li><input type="radio" id="breite-720" class="breite-fixed" name="breite" value="720"> <label for="breite-720">720</label></li>
        <li><input type="radio" id="breite-1280" class="breite-fixed" name="breite" value="1280"> <label for="breite-1280">1280</label></li>
        <li>
          <input type="radio" id="breite-own" name="breite" value="own">
          <label for="breite-own">
            Eigene Größe: <input type="number" name="own-width" id="own-width" value="560" disabled="disabled">
          </label>
        </li>
      </ul>
    </form>

    <h3>Code</h3>
    <p>
      <textarea id="iframe-textarea" rows="2" cols="30" style="width: 100%;" readonly><iframe width="560" height="315" src="<?= get_permalink($post) ?>?embedded=560" frameborder="0" allowfullscreen></iframe></textarea>
    </p>
  </div>
<?php }
