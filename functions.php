<?php
/**
 * For more info: https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

// Theme support options
require_once(get_template_directory().'/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/functions/translation/translation.php');

// Adds site styles to the WordPress editor
require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');

// Setup Advanced Custom Fields THeme Options page
if( function_exists('acf_add_options_page') ) {

  $option_page = acf_add_options_page(array(
		'page_title' 	=> 'Howard Center Homepage Options',
		'menu_title' 	=> 'HC Options',
		'menu_slug' 	=> 'hc-settings',
		'capability' 	=> 'edit_posts',
		'redirect' 	=> false
	));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'Howard Center Homepage',
    'menu_title'	=> 'Homepage',
    'parent_slug'	=> 'hc-settings',
  ));


  acf_add_options_sub_page(array(
		'page_title' 	=> 'Howard Center Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'hc-settings',
	));

}


//Setup Custom image size
add_action( 'after_setup_theme', 'hc_theme_setup' );
function hc_theme_setup() {
   //add_image_size( '', 300 ); // 300 pixels wide (and unlimited height)
   add_image_size( 'bulletin-featured', false ); //
   add_image_size( 'page-header', 870, 300, true );
}


// Custom Post Type for HC Bulletin Items
// Register Custom Post Type
function hc_bulletin_post_type() {

	$labels = array(
		'name'                  => _x( 'Bulletin Items', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Bulletin Item', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Bulletin Type', 'text_domain' ),
		'name_admin_bar'        => __( 'Bulletin Post Type', 'text_domain' ),
		'archives'              => __( 'Bulletin Archives', 'text_domain' ),
		'attributes'            => __( 'Bulletin Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Bulletins', 'text_domain' ),
		'add_new_item'          => __( 'Add New Bulletin', 'text_domain' ),
		'add_new'               => __( 'Add New Bulletin', 'text_domain' ),
		'new_item'              => __( 'New Bulletin', 'text_domain' ),
		'edit_item'             => __( 'Edit Bulletin', 'text_domain' ),
		'update_item'           => __( 'Update Bulletin', 'text_domain' ),
		'view_item'             => __( 'View Bulletin', 'text_domain' ),
		'view_items'            => __( 'View Bulletins', 'text_domain' ),
		'search_items'          => __( 'Search Bulletin', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Bulletin Item', 'text_domain' ),
		'description'           => __( 'Bulletin Items for HC\'s Homepage.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => false,
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'bulletin_post_type', $args );

}
add_action( 'init', 'hc_bulletin_post_type', 0 );

//Registers new SIDEBAR for twitter feed
function custom_sidebar_init() {
	register_sidebar( array(
		'name'          => __( 'Twitter Feed', 'theme_text_domain' ),
		'id'            => 'twitter',
		'description'   => '',
	  'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	 ) );

   register_sidebar( array(
     'name'          => __( 'Footer', 'theme_text_domain' ),
     'id'            => 'footer',
     'description'   => '',
     'class'         => '',
     'before_widget' => '<div class="small-12 medium-6 large-3 cell">',
     'after_widget'  => '</div>',
     'before_title'  => '<h2 class="widgettitle">',
     'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'custom_sidebar_init' );

// Sets callback for Twitter Sidebar
function twitter_sidebar() {
  if ( function_exists('dynamic_sidebar') && is_active_sidebar('twitter') ) {
    dynamic_sidebar('twitter');
 	}
};

// Sets callback for Footer sidebar
function footer_sidebar() {
  if ( function_exists('dynamic_sidebar') && is_active_sidebar('footer') ) {
    dynamic_sidebar('footer');
 	}
};
