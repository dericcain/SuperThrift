<?php
/**
 * superthrift functions and definitions
 *
 * @package superthrift
 */

if ( ! function_exists( 'superthrift_setup' ) ) :

    function superthrift_setup() {

        load_theme_textdomain( 'superthrift', get_template_directory() . '/languages' );

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
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );
        
        add_image_size( 'testimonial', 220, 220, true );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => esc_html__( 'Primary Menu', 'superthrift' ),
            'footer-social' => esc_html__( 'Social Links', 'superthrift' ),
            'footer-menu' => esc_html__( 'Footer Right Menu', 'superthrift' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );
        
        add_theme_support( 'post-formats', array() );

    }

endif; 
// superthrift_setup
add_action( 'after_setup_theme', 'superthrift_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function superthrift_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'superthrift_content_width', 1140 );
}
add_action( 'after_setup_theme', 'superthrift_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function superthrift_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Slot 1', 'superthrift' ),
		'id'            => 'sidebar-1',
		'description'   => 'Footer Slot 1 - Size 2/12',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Slot 3', 'superthrift' ),
		'id'            => 'sidebar-3',
		'description'   => 'Footer Slot 3 - Size 4/12',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'superthrift_widgets_init' );
    
/**
 * Enqueue scripts and styles.
 */
function superthrift_scripts() {
	
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'superthrift-js-bootstrap', get_template_directory_uri() . '/vendors/bootstrap/js/bootstrap.min.js', array(), null, true );
    wp_enqueue_script( 'superthrift-js-jquery-sticky', get_template_directory_uri() . '/vendors/jquery.sticky/jquery.sticky.js', array(), null, true );
    wp_enqueue_script( 'superthrift-js', get_template_directory_uri() . '/js/custom.js', array(), null, true );
    
    wp_enqueue_script( 'momentjs', get_template_directory_uri() . '/vendors/momentjs/moment.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap-datetimepicker', get_template_directory_uri() . '/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js', array(), null, true );
    wp_enqueue_style( 'bootstrap-datetimepicker' , get_template_directory_uri() . '/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css');
    
    wp_enqueue_style( 'flexslider-css' , get_template_directory_uri() . '/vendors/flexslider/flexslider.css');
    wp_register_script( 'flexslider', get_template_directory_uri() . '/vendors/flexslider/jquery.flexslider-min.js', array(), null, true );
    
    wp_register_script( 'js-home', get_template_directory_uri() . '/js/home.js', array(), null, true );
    wp_register_script( 'js-find-store', get_template_directory_uri() . '/js/find-store.js', array(), null, true );
    wp_register_script( 'google-map-v3' , 'https://maps.googleapis.com/maps/api/js?v=3&libraries=places,geometry', array(), null, true );
    wp_register_script( 'gmaps' , get_template_directory_uri() . '/vendors/gmaps/gmaps.min.js', array(), null, true );
    wp_register_script( 'js-pickup' , get_template_directory_uri() . '/js/pickup.js', array(), null, true );

    wp_enqueue_style( 'css-bootstrap' , get_template_directory_uri() . '/vendors/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style( 'font-awesome' , get_template_directory_uri() . '/vendors/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,100,300italic,400italic,700,900,300' );
    
    wp_enqueue_style( 'animate-css' , get_template_directory_uri() . '/vendors/animate/animate.css');
    wp_enqueue_style( 'superthrift-style', get_stylesheet_uri() );
    wp_enqueue_style( 'superthrift-extra-styles' , get_template_directory_uri() . '/css/extra-styles.css');


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'superthrift_scripts' );

function custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/google-map.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/states.php';

/**
 * Predefined fields for Advanced Custom Fields (ACF) plugin
 */
require get_template_directory() . '/inc/acf.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
