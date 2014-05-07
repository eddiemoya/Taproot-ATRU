<?php

add_post_type_support( 'page', 'excerpt' );


add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
         $items .= '<li id="nav-search">' . get_search_form(  false) . '</li>';

    return $items;
}

// global $wp_query;
// echo "<pre>";
// print_r($wp_query);
// echo "</pre>";
add_action('pre_get_posts', 'query_subpages');
function query_subpages($query){


}
/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
// remove_action( 'widgets_init', 'twentytwelve_widgets_init' ,11);
add_action( 'widgets_init', 'atru_widgets_init' );

function atru_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Front Page Hero Banner', 'twentytwelve' ),
		'id' => 'front-page-hero',
		'description' => __( 'Appears on at the bottom of the front page above the footer', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Front Page Footer Banner', 'twentytwelve' ),
		'id' => 'front-page-footer',
		'description' => __( 'Appears on at the bottom of the front page above the footer', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Performance Footer Banner', 'twentytwelve' ),
		'id' => 'performance-footer',
		'description' => __( 'Appears on at the bottom of all performance pages above the footer', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Footer Navigation', 'twentytwelve' ),
		'id' => 'footer',
		'description' => __( 'Appears on at the bottom of all pages', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}



remove_action( 'after_setup_theme', 'twentytwelve_setup' );
add_action( 'after_setup_theme', 'atru_setup' );
function atru_setup() {
	/*
	 * Makes Twenty Twelve available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Twelve, use a find and replace
	 * to change 'twentytwelve' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Header Navigation Menu', 'twentytwelve' ) );
		// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'footer', __( 'Footer Navigation Menu', 'twentytwelve' ) );

	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}

add_action('body_class', 'show_template');
function show_template($classes) {
    global $template;
    global $post;

    $classes[] = $template;
    $classes[] = 'page-'.$post->post_name;

    return $classes;
}


	// Register Custom Post Type
	function performance_post_type() {

		$labels = array(
			'name'                => _x( 'Performances', 'Post Type General Name', 'atru' ),
			'singular_name'       => _x( 'Performance', 'Post Type Singular Name', 'atru' ),
			'menu_name'           => __( 'Performance', 'atru' ),
			'parent_item_colon'   => __( 'Parent Performance:', 'atru' ),
			'all_items'           => __( 'All Performances', 'atru' ),
			'view_item'           => __( 'View Performance', 'atru' ),
			'add_new_item'        => __( 'Add New Performance', 'atru' ),
			'add_new'             => __( 'Add New', 'atru' ),
			'edit_item'           => __( 'Edit Performance', 'atru' ),
			'update_item'         => __( 'Update Performance', 'atru' ),
			'search_items'        => __( 'Search Performances', 'atru' ),
			'not_found'           => __( 'Not found', 'atru' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'atru' ),
		);
		$args = array(
			'label'               => __( 'performance', 'atru' ),
			'description'         => __( 'Performances', 'atru' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
			'taxonomies'          => array( 'category' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'menu_icon'           => '',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'performance', $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'performance_post_type', 0 );


