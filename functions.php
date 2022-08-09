<?php

// register scripts, styles
function gpswp_styles_scripts(){
    // styles
	wp_enqueue_style( 'gpswp-reset', get_theme_file_uri( '/assets/css/reset.css' ), array(), '1.0' );
	wp_enqueue_style( 'gpswp-slick-theme-css', get_theme_file_uri( '/assets/js/slick/slick/slick-theme.css' ), array(), '1.0' );
	wp_enqueue_style( 'gpswp-slick-css', get_theme_file_uri( '/assets/js/slick/slick/slick.css' ), array(), '1.0' );
	wp_enqueue_style( 'gpswp-styles', get_theme_file_uri( '/assets/css/style.css' ), array(), '1.0' );
	wp_enqueue_style( 'gpswp-media', get_theme_file_uri( '/assets/css/media.css' ), array(), '1.0' );

    // scripts
    wp_enqueue_script( 'gpswp-slick', get_theme_file_uri( '/assets/js/slick/slick/slick.js' ), array('jquery'), '3.7.3', true );
    wp_enqueue_script( 'gpswp-script', get_theme_file_uri( '/assets/js/script.js' ), array('jquery'), '3.7.3', true );
}

add_action('wp_enqueue_scripts', 'gpswp_styles_scripts');

// add menu support
register_nav_menus( array(
	'top'    => __( 'Top Menu', 'gpswp' ),
) );

// add post thumbnail support
add_theme_support('post-thumbnails');

// register custom post types
add_action( 'init', 'gpswp_custom_post_types' );
function gpswp_custom_post_types() {
  // custom post type company banner
  register_post_type( 'company_banner',
    array(
	'has_archive' => true,
		'labels' => array(
        'name' => 'Company Banner',
		'singular_name' => 'Company Banner',
		'add_new' => 'Add Company Banner', 
		'add_new_item' => 'Add New Company Banner',
		'new_item' => 'New Company Banner',
		'all_items' => 'All Companies Banners',
		'edit_item' => 'Edit Company Banner',
	),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'supports' => array( 'title','custom-fields' ),
	'menu_icon' => 'dashicons-video-alt3',
	'menu_position' => 5 
    )
  );
  // custom post type challenge
  register_post_type( 'challenge',
    array(
	'has_archive' => true,
		'labels' => array(
        'name' => 'Challenge',
		'singular_name' => 'Challenge',
		'add_new' => 'Add Challenge', 
		'add_new_item' => 'Add New Challenge',
		'new_item' => 'New Challenge',
		'all_items' => 'All Challenges',
		'edit_item' => 'Edit Challenge',
	),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'supports' => array('title', 'editor', 'thumbnail' ),
	'menu_icon' => 'dashicons-info-outline',
	'menu_position' => 5 
    )
  );
  // custom post type solution
  register_post_type( 'solution',
    array(
	'has_archive' => true,
		'labels' => array(
        'name' => 'Solution',
		'singular_name' => 'Solution',
		'add_new' => 'Add Solution', 
		'add_new_item' => 'Add New Solution',
		'new_item' => 'New Solution',
		'all_items' => 'All Solutions',
		'edit_item' => 'Edit Solution',
	),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'supports' => array('title', 'editor', 'thumbnail' ),
	'menu_icon' => 'dashicons-admin-network',
	'menu_position' => 5 
    )
  );
  // custom post type channel_type
  register_post_type( 'channel_type',
    array(
	'has_archive' => true,
		'labels' => array(
        'name' => 'Channel Type',
		'singular_name' => 'Channel Type',
		'add_new' => 'Add Channel Type', 
		'add_new_item' => 'Add New Channel Type',
		'new_item' => 'New Channel Type',
		'all_items' => 'All Channel Types',
		'edit_item' => 'Edit Channel Type',
	),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'supports' => array('title', 'thumbnail' ),
	'menu_icon' => 'dashicons-admin-site-alt3',
	'menu_position' => 5 
    )
  );
  // custom post type header_slide
  register_post_type( 'header_slide',
    array(
	'has_archive' => true,
		'labels' => array(
        'name' => 'Header Slide',
		'singular_name' => 'Header Slide',
		'add_new' => 'Add Header Slide', 
		'add_new_item' => 'Add New Header Slide',
		'new_item' => 'New Header Slide',
		'all_items' => 'All Header Slides',
		'edit_item' => 'Edit Header Slide',
	),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'supports' => array('title', 'thumbnail' ),
	'menu_icon' => 'dashicons-video-alt3',
	'menu_position' => 5 
    )
  );
  // custom post type review
  register_post_type( 'review',
    array(
	'has_archive' => true,
		'labels' => array(
        'name' => 'Review',
		'singular_name' => 'Review',
		'add_new' => 'Add Review', 
		'add_new_item' => 'Add New Review',
		'new_item' => 'New Review',
		'all_items' => 'All Reviews',
		'edit_item' => 'Edit Review',
	),
	'public' => true,
	'show_ui' => true,
	'show_in_menu' => true,
	'supports' => array('title','thumbnail' ),
	'menu_icon' => 'dashicons-format-status',
	'menu_position' => 5 
    )
  );
}

// add widgets
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => '',
		'id'            => "sidebar-1",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}