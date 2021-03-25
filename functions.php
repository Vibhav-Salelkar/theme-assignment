<?php
/**
 * Initial Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Initial_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'initial_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function initial_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Initial Theme, use a find and replace
		 * to change 'initial-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'initial-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'initial-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'initial_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'initial_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function initial_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'initial_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'initial_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function initial_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'initial-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'initial-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Post Sidebar', 'initial-theme' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'initial-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'initial_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function initial_theme_scripts() {
	wp_enqueue_style( 'initial-theme-style', get_stylesheet_uri(), array(), rand(111,9999) );
	wp_style_add_data( 'initial-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'initial-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'initial_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * widget file addition.
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');




//portfolio section
function it_custom_post_type() {

	$labels = array(
			'name'           => esc_html__( 'Portfolio', 'it_domain' ),
			'singular_name'  => esc_html__( 'Portfolio', 'it_domain' ),
			'add_new'        => esc_html__( 'Add Portfolio Item', 'it_domain' ),
			'all_items'      => esc_html__( 'All Portfolio Items', 'it_domain' ),
			'add_new_item'   => esc_html__( 'Add Portfolio item', 'it_domain' ),
			'edit_item'      => esc_html__( 'Edit Portfolio Item', 'it_domain' ),
			'new_item'       => esc_html__( 'New Portfolio Item', 'it_domain' ),
			'view_item'      => esc_html__( 'View Portfolio Item', 'it_domain' ),
			'search_item'    => esc_html__( 'Search Portfolio Items', 'it_domain' ),
			'not_found'      => esc_html__( 'No portfolio items found', 'it_domain' ),
		'not_found_in_trash' => esc_html__( 'No portfolio items found in trash', 'it_domain' ),
		'parent_item_colon'  => esc_html__( 'Parent Portfolio Item', 'it_domain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'publicly_queryable' => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-format-image',
		'supports'            => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'comments',
			'revision',
		),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'menu_position'       => 5,
		'exclude_from_search' => false,
		'rewrite'             => array( 'slug' => 'it-portfolio' ),
	);

	register_post_type( 'it-portfolio', $args );
}

add_action( 'init', 'it_custom_post_type' );


//custom excerpt: refered wordpress docs
function it_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'it_custom_excerpt_length', 999 );