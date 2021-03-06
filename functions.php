<?php
/**
 * pine-alpha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pine-alpha
 */

 /**
 * Alpha only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once __DIR__ . '/inc/tgmpa/class-tgm-plugin-activation.php';


if( ! defined( 'THEME_VERSION' ) ) {
	/**
	 * Define theme version
	 */
	define( 'THEME_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pine_alpha_setup' ) ) {
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
		
		// Add responsive embeds.
		add_theme_support( 'responsive-embeds' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		add_theme_support('disable-custom-font-sizes');
		add_theme_support( 'disable-custom-colors' );

		// Enqueue editor styles for Tiny MCE.
		// add_editor_style( 'style-editor-tiny-mce.css' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'alpha-slider-image-small', 400, 500, true );
		add_image_size( 'alpha-slider-image-large', 800, 1000, true );
		add_image_size( 'alpha-category-cover', 800, 800, true );
		add_image_size( 'alpha-featured-image', 1000, 600, true );
		add_image_size( 'alpha-featured-image-small', 400, 240, true );
		add_image_size( 'alpha-archive-header', 1920, 300, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'header' => esc_html__( 'Header', 'pine-alpha' ),
			'footer' => esc_html__( 'Footer', 'pine-alpha' ),
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

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 90,
				'width'       => 230,
				'flex-width'  => true,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Define and register starter content to showcase the theme on new sites.
		$starter_content = array(
			'widgets' => array(
				'sidebar-1' => array(
					'calendar',
					'search'
				),
				'footer-1' => array(
					'meta',
				),
				'footer-2' => array(
					'recent-posts',
				),
				'footer-3' => array(
					'archives',
				),
				'footer-4' => array(
					'text_business_info',
				),
			),

			'posts' => array(
				'home',
				'about',
				'contact',
				'blog',
			),

			'options' => array(
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
				'page_for_posts' => '{{blog}}',
			),

			'nav_menus' => array(
				'header' => array(
					'name' => __( 'Header Menu', 'pine-alpha' ),
					'items' => array(
						'link_home',
						'page_about',
						'page_blog',
						'page_contact',
					),
				),
			),
		);

		/**
		 * Filters Alpha array of starter content.
		 *
		 * @since Alpha 0.1.0
		 *
		 * @param array $starter_content Array of starter content.
		 */
		$starter_content = apply_filters( 'pine_alpha_starter_content', $starter_content );

		add_theme_support( 'starter-content', $starter_content );
	}
}
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
		'description'   => esc_html__( 'Add widgets here to appear in your sidebar.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Canvi (Off-canvas navigation)', 'pine-alpha' ),
		'id'            => 'canvi-1',
		'description'   => esc_html__( 'Add widgets here to appear in your off-canvas navigation.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'pine-alpha' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here to appear in your footer col #1.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'pine-alpha' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here to appear in your footer col #2.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'pine-alpha' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here to appear in your footer col #3.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'pine-alpha' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here to appear in your footer col #4.', 'pine-alpha' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pine_alpha_widgets_init' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since 0.1.0
 *
 * @param string $link Link to single post/page.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function pine_alpha_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pine-alpha' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'pine_alpha_excerpt_more' );

/**
 * TODO: actualize for the final theme 
 *
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since 0.1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function pine_alpha_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	1000 <= $width && $sizes = '(max-width: 575px) 95vw, (max-width: 767px) 240px, (max-width: 991px) 330px, (max-width: 1199px) 290px 400px';

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'pine_alpha_content_image_sizes_attr', 10, 2 );

/**
 * Display custom CSS styles.
 */
function pine_alpha_css_wrap() {
	require_once( get_parent_theme_file_path( '/inc/custom-styles.php' ) );
?>
	<style type="text/css" id="custom-theme-styles">
		<?php echo pine_alpha_custom_styles(); ?>
	</style>
<?php }
add_action( 'wp_head', 'pine_alpha_css_wrap' );

/**
 * Register Google Fonts
 */
function pine_alpha_fonts_url() {
	$fonts_url = '';
	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$fonts = esc_html_x( 'on', 'Merriweather and Source Sans Pro font: on or off', 'pine-alpha' );

	if ( 'off' !== $fonts ) {
		$font_families = array();
		$font_families[] = 'Merriweather:400,700';
		$font_families[] = 'Source Sans Pro:400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */
function pine_alpha_scripts() {
	wp_enqueue_style( 'pine-alpha-fonts', pine_alpha_fonts_url(), array(), null );
	wp_enqueue_style( 'pine-alpha-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'pine-alpha-slick-vendor', get_template_directory_uri() . '/assets/js/vendor/slick.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'pine-alpha-canvi-inert', get_template_directory_uri() . '/assets/js/vendor/inert.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'pine-alpha-canvi', get_template_directory_uri() . '/assets/js/vendor/canvi.js', array( 'pine-alpha-canvi-inert' ), THEME_VERSION, true );

	if( get_theme_mod( 'pine_alpha_header_section_navigation_sticky', 0 ) == 1 ) {
		wp_enqueue_script( 'pine-alpha-headroom', get_template_directory_uri() . '/assets/js/vendor/headroom.js', array( 'jquery' ), THEME_VERSION, true );
		wp_enqueue_script( 'pine-alpha-headroom-jquery', get_template_directory_uri() . '/assets/js/vendor/jQuery.headroom.js', array( 'jquery' ), THEME_VERSION, true );
	}

	wp_enqueue_script( 'pine-alpha-main', get_template_directory_uri() . '/assets/js/custom/main.js', array( 'pine-alpha-canvi' ), THEME_VERSION, true );
	wp_enqueue_script( 'pine-alpha-slick', get_template_directory_uri() . '/assets/js/custom/slick-carousel.js', array(), THEME_VERSION, true );
	wp_enqueue_script( 'pine-alpha-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/custom/skip-link-focus-fix.js', array(), THEME_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pine_alpha_scripts' );

/**
 * Enqueue admin scripts and styles
 */
function pine_alpha_admin_scripts( $hook ) {
	// Load welcome screen CSS
	wp_enqueue_style( 'pine-alpha-welcome-style', get_template_directory_uri() . '/inc/welcome/css/style.css', array(), THEME_VERSION, 'all' );

	if ( 'post.php' != $hook ) {
        return;
	}
	
	// Load editor fonts from Google
	wp_enqueue_style( 'pine-alpha-fonts', pine_alpha_fonts_url(), array(), null );
}
add_action( 'admin_enqueue_scripts', 'pine_alpha_admin_scripts', 5 );

/**
 * Add backend styles for Gutenberg.
 */
function pine_alpha_add_gutenberg_assets() {
	wp_enqueue_style( 'pine-alpha-gutenberg',  get_template_directory_uri() . '/style-editor.css', false );
}
add_action( 'enqueue_block_editor_assets', 'pine_alpha_add_gutenberg_assets' );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since 0.1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function pine_alpha_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'pine_alpha_front_page_template' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since 0.1.0
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function pine_alpha_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'rem';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'pine_alpha_widget_tag_cloud_args' );

/**
 * Add new user profile fields
 *
 */

if ( ! function_exists( 'pine_alpha_modify_contact_methods' ) ) :

    function pine_alpha_modify_contact_methods( $contactmethods ) {
        $contactmethods['twitter'] = __( 'Twitter', 'pine-alpha' );
        $contactmethods['facebook'] = __( 'Facebook', 'pine-alpha' );
        $contactmethods['linkedin'] = __( 'LinkedIn', 'pine-alpha' );
        $contactmethods['instagram'] = __( 'Instagram', 'pine-alpha' );
        $contactmethods['flickr'] = __( 'Flickr', 'pine-alpha' );
        $contactmethods['tumblr'] = __( 'Tumblr', 'pine-alpha' );
        $contactmethods['pinterest'] = __( 'Pinterest', 'pine-alpha' );
        $contactmethods['github'] = __( 'GitHub', 'pine-alpha' );
        $contactmethods['youtube'] = __( 'YouTube', 'pine-alpha' );
        $contactmethods['dribbble'] = __( 'Dribbble', 'pine-alpha' );
        $contactmethods['vk'] = __( 'VK', 'pine-alpha' );
        $contactmethods['spotify'] = __( 'Spotify', 'pine-alpha' );

        return $contactmethods;
    }
    add_filter( 'user_contactmethods','pine_alpha_modify_contact_methods', 10, 1 );

endif;

/**
 * Remove wpcf7 stylesheet.
 */
add_filter( 'wpcf7_load_css', '__return_false' );

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
 * Add custom styles.
 */
require get_template_directory() . '/inc/custom-styles.php';

/**
 * Add SVG icons.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load custom code in header.
 */
if ( pine_alpha_get_option( 'pine_alpha_theme_options_code_head_textareacode' ) ) {
	function pine_alpha_load_custom_code_in_header() {
		echo pine_alpha_get_option( 'pine_alpha_theme_options_code_head_textareacode' );
	}

	add_action( 'wp_head', 'pine_alpha_load_custom_code_in_header', 999 );
}

/**
 * Load custom code in footer.
 */
if ( pine_alpha_get_option( 'pine_alpha_theme_options_code_body_textareacode' ) ) {
	function pine_alpha_load_custom_code_in_body() {
		echo pine_alpha_get_option( 'pine_alpha_theme_options_code_body_textareacode' );
	}

	add_action( 'wp_footer', 'pine_alpha_load_custom_code_in_body', 999 );
}


/**
 * Filter the excerpt length.
 */
function pine_custom_excerpt_length( $length ) {
    return get_theme_mod( 'pine_alpha_layout_list_item_section_excerpt_length', 140 );
}
add_filter( 'excerpt_length', 'pine_custom_excerpt_length');


/**
 * Filter the "read more" excerpt string link to the post.
 */
function pine_custom_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'pine_custom_excerpt_more' );