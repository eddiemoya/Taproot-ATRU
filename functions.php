<?php

add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'html5', array( 'search-form' ) );

add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
    	$search = str_replace('"Search"', '">"',  get_search_form(  false));
         $items .= '<li id="nav-search">' . $search . '</li>';


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
		'name' => __( 'Front Page Hero Slider', 'twentytwelve' ),
		'id' => 'front-page-hero-slider',
		'description' => __( 'Appears on at the top of the front page - where featured images usually are.', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Front Page Hero Ad Banner', 'twentytwelve' ),
		'id' => 'front-page-hero',
		'description' => __( 'Appears on at the top of the front page below the slider', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Front Page Bottom Ad Banner', 'twentytwelve' ),
		'id' => 'front-page-footer',
		'description' => __( 'Appears on at the bottom of the front page above the footer', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Event Bottom Ad Banner', 'twentytwelve' ),
		'id' => 'event-footer',
		'description' => __( 'Appears on at the bottom of all events pages above the footer', 'twentytwelve' ),
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

	register_sidebar( array(
		'name' => __( 'Event Sidebar', 'twentytwelve' ),
		'id' => 'event-right-rail',
		'description' => __( 'Appears on the right of events pages.', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Subscriptions', 'twentytwelve' ),
		'id' => 'page-right-rail-subscriptions-season-tickets',
		'description' => __( 'Appears on the right of the Subscriptions page only. Slug should be "subscriptions-season-tickets"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Group Tickets', 'twentytwelve' ),
		'id' => 'page-right-rail-group-tickets',
		'description' => __( 'Appears on the right of the Group Tickets page only. Slug should be "group-tickets"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: National History Landmark', 'twentytwelve' ),
		'id' => 'page-right-rail-the-national-landmark-building-history',
		'description' => __( 'Appears on the right of the National History Landmark page only. Slug should be "the-national-landmark-building-history"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Sidebar: Plan Your Visit', 'twentytwelve' ),
		'id' => 'page-right-rail-plan-your-visit',
		'description' => __( 'Appears on the right of the Plan Your Visit page only. Slug should be "plan-your-visit"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Sidebar: Creative Engagement', 'twentytwelve' ),
		'id' => 'page-right-rail-creative-engagement',
		'description' => __( 'Appears on the right of the Creative Engagement page only. Slug should be "creative-engagement"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Sidebar: CE - HTHTA', 'twentytwelve' ),
		'id' => 'page-right-rail-hands-together-heart-to-art-camp',
		'description' => __( 'Appears on the right of the HTHTA page only. Slug should be "hands-together-heart-to-art-camp"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Page Sidebar: CE - Teachers', 'twentytwelve' ),
		'id' => 'page-right-rail-teacher-programs',
		'description' => __( 'Appears on the right of the Teachers page only. Slug should be "teacher-programs"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: CE - Kids & Family', 'twentytwelve' ),
		'id' => 'page-right-rail-kids-family-programs',
		'description' => __( 'Appears on the right of the Kids & Family Program page only. Slug should be "kids-family-programs"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Explore', 'twentytwelve' ),
		'id' => 'page-right-rail-explore',
		'description' => __( 'Appears on the right of the Explore page only. Slug should be "explore"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Community Programs', 'twentytwelve' ),
		'id' => 'page-right-rail-community-programs',
		'description' => __( 'Appears on the right of the Community Programs page only. Slug should be "community-programs"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Donate', 'twentytwelve' ),
		'id' => 'page-right-rail-donate',
		'description' => __( 'Appears on the right of the Donate page only. Slug should be "donate"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Buy Tickets', 'twentytwelve' ),
		'id' => 'page-right-rail-buy-tickets',
		'description' => __( 'Appears on the right of the Donate page only. Slug should be "buy-tickets"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Ways to Give', 'twentytwelve' ),
		'id' => 'page-right-rail-ways-to-give',
		'description' => __( 'Appears on the right of the Ways to Give page only. Slug should be "ways-to-give"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Reasons to Give', 'twentytwelve' ),
		'id' => 'page-right-rail-reasons-to-give',
		'description' => __( 'Appears on the right of the Reasons to Give page only. Slug should be "reasons-to-give"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: About Us', 'twentytwelve' ),
		'id' => 'page-right-rail-about-us',
		'description' => __( 'Appears on the right of the About Us page only. Slug should be "about-us"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Junior Board', 'twentytwelve' ),
		'id' => 'page-right-rail-junior-board',
		'description' => __( 'Appears on the right of the "Junior Board" page only. Slug should be "junior-board"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: auxiliary Board', 'twentytwelve' ),
		'id' => 'page-right-rail-junior-board',
		'description' => __( 'Appears on the right of the "auxiliary Board" page only. Slug should be "auxiliary-board"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Work With Us', 'twentytwelve' ),
		'id' => 'page-right-rail-work-with-us',
		'description' => __( 'Appears on the right of the Work With Us page only. Slug should be "work-with-us"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Internship Program', 'twentytwelve' ),
		'id' => 'page-right-rail-internship-program',
		'description' => __( 'Appears on the right of the Internship Program page only. Slug should be "internship-program"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Sidebar: Rent The Auditorium', 'twentytwelve' ),
		'id' => 'page-right-rail-rent-the-auditorium',
		'description' => __( 'Appears on the right of the Rent The Auditorium page only. Slug should be "rent-the-auditorium"', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Genre Archives', 'twentytwelve' ),
		'id' => 'genre',
		'description' => __( 'Appears on the right of the Genre Archive pages only. Paths include "/genre/"', 'twentytwelve' ),
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

	register_nav_menu( 'footer-social-media', __( 'Footer Social Media', 'twentytwelve' ) );

	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'thumbnail', 150, 150, true );
	add_image_size( 'medium', 231, 121, true );
	add_image_size( 'large', 960, 1024, true );


}

add_action('body_class', 'show_template');
function show_template($classes) {
    global $template;
    global $post;

    $classes[] = $template;
    $classes[] = 'page-'.$post->post_name;

    return $classes;
}

// Hook into the 'init' action
// add_action( 'init', 'event_type_taxonomy', 10 );


if ( is_admin() ) {
    add_action( 'load-post.php', 'call_oembed_metabox', 0 );
    add_action( 'load-post-new.php', 'call_oembed_metabox', 0 );
}

/**
 * Calls the class on the post edit screen.
 */
function call_oembed_metabox() {
    new oembed_metabox();
}

/**
 * The Class.
 */
class oembed_metabox {

	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
	}

	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
            $post_types = array('tcms_production');     //limit meta box to certain post types
            if ( in_array( $post_type, $post_types )) {
		add_meta_box(
			'oembed_featured_video'
			,__( 'Featured Video', 'oembed_textdomain' )
			,array( $this, 'render_meta_box_content' )
			,$post_type
			,'side'
			,'high'
		);
            }
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {

		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['oembed_inner_custom_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['oembed_inner_custom_box_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'oembed_inner_custom_box' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
                //     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;

		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		/* OK, its safe for us to save the data now. */

		// Sanitize the user input.
		$mydata = sanitize_text_field( $_POST['oembed_featured_video'] );

		// Update the meta field.
		update_post_meta( $post_id, 'oembed_featured_video', $mydata );
	}


	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'oembed_inner_custom_box', 'oembed_inner_custom_box_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta( $post->ID, 'oembed_featured_video', true );

		// Display the form, using the current value.
		echo '<label for="oembed_featured_video">';
		_e( 'Description for this field', 'oembed_textdomain' );
		echo '</label> ';
		echo '<input type="text" id="oembed_featured_video" name="oembed_featured_video"';
                echo ' value="' . esc_attr( $value ) . '" size="25" />';
	}
}

function format_subevent($event){

	$event = json_decode($event);
	$event->startdate = date("l, F j", strtotime($event->startdate));
	$event->starttime = date("g:i a", strtotime($event->starttime));

	return $event;
}

function get_event_date_range($post_id){
	 $metadata = get_post_custom($post_id);
}


// add_action( 'registered_post_type', 'event_capabilities', 10, 2 );
// function event_capabilities($post_type, $args) {

// 	   if ( 'event' === $post_type ) {

//         global $wp_post_types;

//         $cap_args = (object)array(
//         	'capability_type' => 'post',
//         	'capabilities' => array()
//         );
//        	$cap = get_post_type_capabilities($cap_args);
//        	print_r($cap);
//          $args->cap = $cap;


//          print_r($args);

//         $wp_post_types[ $post_type ] = $args;
//     }
// }

