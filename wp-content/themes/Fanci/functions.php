<?php 

function wpbootstrap_scripts_with_jquery()
{
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( get_template_directory_uri() . '/js/jquery-2.1.3.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );

	wp_register_script( 'custom-js', get_template_directory_uri() . '/js/script.js');
	wp_enqueue_script( 'custom-js' );

  wp_register( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
  wp_enqueue_script( 'main-js' );

  wp_register( 'swipebox', get_template_directory_uri() . '/js/jquery.swipebox.min.js', array( 'jquery' ) );


  

  // wp_register( 'custom', get_template_directory_uri() . '/js/classie.js' );

	// wp_enqueue_style( 'slider', get_stylesheet_uri() . '/css/menu_sideslide.css' );



	// wp_enqueue_script( 'for-slider' );



}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );




// function add_stylesheets() {
//     wp_enqueue_style( 'login-page-styles', get_template_directory_uri() . '/css/menu_sidelside.css', array(), '20120208', 'all'  ); 
// }
// add_action( 'stylesheets_enqueue_scripts', 'add_stylesheets' );

// function register_my_menu() {
//   register_nav_menu('header-menu',__( 'Header Menu' ));
// }
// add_action( 'init', 'register_my_menu' );
require_once('wp_bootstrap_navwalker.php');

function register_my_menus() {
register_nav_menus(
array(
'new-menu' => __( 'New Menu' ),
'another-menu' => __( 'Another Menu' ),
'an-extra-menu' => __( 'An Extra Menu' ),
'walker'            => new wp_bootstrap_navwalker(),

    )
  );
}
add_action( 'init', 'register_my_menus' );


function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};

// function people_init() {
// 	// create a new taxonomy
// 	register_taxonomy(
// 		'people',
// 		'post',
// 		array(
// 			'label' => __( 'People' ),
// 			'rewrite' => array( 'slug' => 'person' ),
// 			'capabilities' => array(
// 				'assign_terms' => 'edit_guides',
// 				'edit_terms' => 'publish_guides'
// 			)
// 		)
// 	);
// }
// add_action( 'init', 'people_init' );

// wp_set_object_terms( 123, 'Bob', 'person' );


//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires

// add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

// function create_topics_nonhierarchical_taxonomy() {

// // Labels part for the GUI

//   $labels = array(
//     'name' => _x( 'Topics', 'taxonomy general name' ),
//     'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
//     'search_items' =>  __( 'Search Topics' ),
//     'popular_items' => __( 'Popular Topics' ),
//     'all_items' => __( 'All Topics' ),
//     'parent_item' => null,
//     'parent_item_colon' => null,
//     'edit_item' => __( 'Edit Topic' ), 
//     'update_item' => __( 'Update Topic' ),
//     'add_new_item' => __( 'Add New Topic' ),
//     'new_item_name' => __( 'New Topic Name' ),
//     'separate_items_with_commas' => __( 'Separate topics with commas' ),
//     'add_or_remove_items' => __( 'Add or remove topics' ),
//     'choose_from_most_used' => __( 'Choose from the most used topics' ),
//     'menu_name' => __( 'Topics' ),
//   ); 

// // Now register the non-hierarchical taxonomy like tag

//   register_taxonomy('topics','post',array(
//     'hierarchical' => false,
//     'labels' => $labels,
//     'show_ui' => true,
//     'show_admin_column' => true,
//     'update_count_callback' => '_update_post_term_count',
//     'query_var' => true,
//     'rewrite' => array( 'slug' => 'topic' ),
//   ));
// }

add_theme_support( 'post-thumbnails' ); 


add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'staff', 'staff', array( 'hierarchical' => true, 'label' => 'Staff Categories', 'query_var' => true, 'rewrite' => array(
                'slug' => 'pubs/type',
                'with_front' => false
             ), ) );
}

add_action('init', 'register_mypost_type');
function register_mypost_type() {
  register_post_type('staff',array(
    'labels' => array(
      'name' => 'NCDA Staff',
      'singular_name' => 'NCDA Staff',
      'add_new' => 'Add New ',
      'add_new_item' => 'Add New Staff',
      'edit_item' => 'Edit Staff',
      'new_item' => 'Add New Staff',
      'view_item' => 'View Staff',
      'search_items' => 'Search Staff',
      'not_found' => 'No Staff Members found',
      'not_found_in_trash' => 'No staff members found in trash'
    ),   
    'public' => true,
    'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'companies'),
    'taxonomies' => array('staff_categories'),
    'menu_position' => 7,
    'has_archive' => true,
    'hierarchical' => false
  ));
 }

?>