<?php
/**
 * pine-alpha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pine-alpha
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once __DIR__ . '/inc/tgmpa/class-tgm-plugin-activation.php';

/**
 * Set up Composer autoload
 */
// require_once __DIR__ . '/vendor/autoload.php';


if( ! defined( 'THEME_VERSION' ) ) :
	/**
	 * Define theme version
	 */
	define( 'THEME_VERSION', '0.1.0' );
endif;

if ( ! function_exists( 'pine_alpha_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pine_alpha_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pine-alpha, use a find and replace
		 * to change 'pine-alpha' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pine-alpha', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'pine-alpha' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'pine_alpha_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pine_alpha_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pine_alpha_content_width', 640 );
}
add_action( 'after_setup_theme', 'pine_alpha_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pine_alpha_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pine-alpha' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pine_alpha_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pine_alpha_scripts() {
	wp_enqueue_style( 'pine-alpha-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pine-alpha-navigation', get_template_directory_uri() . '/js/navigation.js', array(), THEME_VERSION, true );

	wp_enqueue_script( 'pine-alpha-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pine_alpha_scripts' );

/**
 * Enqueue admin scripts and styles.
 */
function pine_alpha_admin_scripts() {
	wp_enqueue_style( 'wpw_style', get_template_directory_uri() . '/inc/welcome/css/style.css', array(), THEME_VERSION, 'all' );
}

add_action( 'admin_enqueue_scripts', 'pine_alpha_admin_scripts' );

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
 * Load theme options.
 */
require get_template_directory() . '/inc/options.php';

/**
 * Required plugin dependencies.
 */
require get_template_directory() . '/inc/dependencies.php';

/**
 * Add welcome screen.
 */
require get_template_directory() . '/inc/welcome-screen.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
