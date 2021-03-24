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




//customize settings
function it_header_text($wp_customize) {
	$wp_customize->add_section('it_header_text_section' ,array(
		'title'=>'Header Text'
	));

	$wp_customize->add_setting('it_header_text_headline', array(
		'default'=> "Gearing up the ideas"
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_header_text_headline_control' ,array(
		'label'=>'Headline',
		'section'=>'it_header_text_section',
		 'settings'=>'it_header_text_headline'
	)));

	$wp_customize->add_setting('it_header_text_desc', array(
		'default'=> "Lorem ipsum dolor sit amet, consec Ut enim ad minim veniam, quis nostrud exercitation. ullam modo consequat. irure dolor in reperit in voluptate."
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_header_text_desc_control' ,array(
		'label'=>'Description',
		'section'=>'it_header_text_section',
		'settings'=>'it_header_text_desc',
		'type'=>'textarea'
	)));
}

add_action('customize_register','it_header_text');

function it_footer_text($wp_customize) {
	$wp_customize->add_section('it_footer_text_section' ,array(
		'title'=>'Footer Text'
	));

	$wp_customize->add_setting('it_footer_text_contact_title', array(
		'default'=> "Contact Us"
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_footer_text_contact_title_control' ,array(
		'label'=>'Contact Title',
		'section'=>'it_footer_text_section',
		'settings'=>'it_footer_text_contact_title',
	)));

	$wp_customize->add_setting('it_footer_text_contact_desc', array(
		'default'=> "Street 21 Planet, A-11, dapibus tristique 123511<br>
		Tel:123 456 7890 Fax:123 456789"
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_footer_text_contact_desc_control' ,array(
		'label'=>'Contact Info',
		'section'=>'it_footer_text_section',
		'settings'=>'it_footer_text_contact_desc',
		'type'=>'textarea'
	)));

	$wp_customize->add_setting('it_footer_text_email', array(
		'default'=> "contactus@dsignfly.com"
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_footer_text_email_control' ,array(
		'label'=>'Email',
		'section'=>'it_footer_text_section',
		'settings'=>'it_footer_text_email',
	)));

	$wp_customize->add_setting('it_footer_text_email_link', array(
		'default'=> "mailto:contactus@dsignfly.com"
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_footer_text_email_link_control' ,array(
		'label'=>'Email Link',
		'section'=>'it_footer_text_section',
		'settings'=>'it_footer_text_email_link',
	)));

	$wp_customize -> add_setting( 'it_social_icons', array(
		'default' => 'www.google.com,
		www.facebook.com,
		www.pinterest.com,
		www.twitter.com,
		www.linkedin.com'
	) );

	$wp_customize -> add_control( new WP_Customize_Control( $wp_customize, 'it_social_icons-control',
	array(
		'label'    => 'Social Links',
		'section'  => 'it_footer_text_section',
		'settings' => 'it_social_icons',
		'type'     => 'textarea'
	) ) );
}

add_action('customize_register','it_footer_text');

function it_gallery($wp_customize) {
	$wp_customize->add_section('it_gallery_section' ,array(
		'title'=>'Gallery Settings'
	));

	$wp_customize->add_setting('it_gallery_headline', array(
		'default'=> "D'SIGN IS THE SOUL"
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_gallery_headline_control' ,array(
		'label'=>'Gallery Headline',
		'section'=>'it_gallery_section',
		'settings'=>'it_gallery_headline'
	)));

	$wp_customize->add_setting('it_gallery_btn', array(
		'default'=> ""
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'it_gallery_btn_control' ,array(
		'label'=>'Description',
		'section'=>'it_gallery_section',
		'settings'=>'it_gallery_btn',
		'type'=>'dropdown-pages'
	)));
}

add_action('customize_register','it_gallery');

//custom excerpt: refered wordpress docs
function it_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'it_custom_excerpt_length', 999 );