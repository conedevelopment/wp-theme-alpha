<?php
/**
 * pine-alpha Theme Options
 *
 * @package pine-alpha
 */

add_action( 'cmb2_admin_init', 'pine_alpha_register_theme_options_metabox' );

/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function pine_alpha_register_theme_options_metabox() {

	$prefix = 'pine_alpha_';
	
	$cmb_options = new_cmb2_box( array(
		'id'              => $prefix . 'theme_options_page',
		'title'           => esc_html__( 'Theme Options for Alpha', 'pine-alpha' ),
		'object_types'    => array( 'options-page' ),
		'parent_slug'     => 'themes.php',
		'menu_title'      => esc_html__( 'Theme Options', 'pine-alpha' ), 
		'option_key'      => $prefix . 'theme_options',
	) );


	$cmb_options->add_field( array(
		'name' => esc_html__( 'Post Settings', 'pine-alpha' ),
		'desc' => esc_html__( 'Set the defaults related to your posts.', 'pine-alpha' ),
		'type' => 'title',
		'id'   => $prefix . 'theme_options_posts_title'
	) );
		
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Enable Microdata', 'pine-alpha' ),
		'id'   => $prefix . 'theme_options_blog_schema_checkbox',
		'desc' => esc_html__( 'Turn on BlogPosting schema.org data', 'pine-alpha' ),
		'type' => 'checkbox'
	) );

	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Hide Author Box', 'pine-alpha' ),
		'id'   => $prefix . 'theme_options_author_box_checkbox',
		'desc' => esc_html__( 'Turn off the author box on post single view', 'pine-alpha' ),
		'type' => 'checkbox'
	) );


	$cmb_options->add_field( array(
		'name' => esc_html__( 'Cookie Notification', 'pine-alpha' ),
		'desc' => esc_html__( 'Enable our basic cookie notification.', 'pine-alpha' ),
		'type' => 'title',
		'id'   => $prefix . 'theme_options_cookie_title'
	) );

	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Enable Cookie Notification', 'pine-alpha' ),
		'id'   => $prefix . 'theme_options_cookie_notification_checkbox',
		'desc' => esc_html__( 'Turn on the notification', 'pine-alpha' ),
		'type' => 'checkbox'
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Notification Text', 'pine-alpha' ),
		'desc' => esc_html__( 'This is an HTML editor so you can use HTML tags. For the best result follow the example.', 'pine-alpha' ),
		'default' => esc_html__( '<p>To make this site work properly, we sometimes place small data files called <a href="//yoursiteurl.com/privacy-policy/">cookies on your device</a>. Most big websites do this too.</p>', 'pine-alpha' ),
		'id' => $prefix . 'theme_options_cookie_notification_text_textareacode',
		'type' => 'textarea_code'
	) );


	$cmb_options->add_field( array(
		'name' => esc_html__( 'Add code to the theme', 'pine-alpha' ),
		'desc' => esc_html__( 'Here you can declare code in the <head> and <body> section. It is useful for Analytics and Facebook tracking code.', 'pine-alpha' ),
		'type' => 'title',
		'id'   => $prefix . 'theme_options_code_title'
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( '<head></head> Code', 'pine-alpha' ),
		'desc' => esc_html__( 'Add code between your <head> element.', 'pine-alpha' ),
		'id' => $prefix . 'theme_options_code_head_textareacode',
		'type' => 'textarea_code'
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( '<body></body> Code', 'pine-alpha' ),
		'desc' => esc_html__( 'Add code between your <body> element.', 'pine-alpha' ),
		'id' => $prefix . 'theme_options_code_body_textareacode',
		'type' => 'textarea_code'
	) );

 	/** 
 	 * Metabox to add fields to categories
 	 */ 
 	$cmb_term = new_cmb2_box( array( 
 		'id'               => $prefix . 'category_fields', 
 		'title'            => esc_html__( 'Category Metabox', 'pine-alpha' ),
 		'object_types'     => array( 'term' ),
 		'taxonomies'       => array( 'category' )
	) );
	 
	$cmb_term->add_field( array(
		'name'    => esc_html__( 'Category Color', 'pine-alpha' ),
		'id'      => $prefix . 'category_color', 
		'type'    => 'colorpicker',
		'default' => '#24d2e5',
		'column' => true
	) );

	$cmb_term->add_field( array(
		'name'    => esc_html__( 'Category Cover Image', 'pine-alpha' ),
		'id'      => $prefix . 'category_cover_image', 
		'type'    => 'file',
		'options' => array(
			'url' => false, 
		),
		'text'    => array(
			'add_upload_file_text' =>  esc_html__( 'Add File', 'pine-alpha' )
		),
		'preview_size' => 'medium',
	) );

	/** 
 	* Metabox to add fields to categories
 	*/ 
	$cmb_post = new_cmb2_box( array( 
		'id'               => $prefix . 'post_fields', 
		'title'            => esc_html__( 'Theme Specific Settings', 'pine-alpha' ),
		'object_types'     => array( 'post' )
	) );
	
	 $cmb_post->add_field( array(
		'name'   => esc_html__( 'Show this in slider?', 'pine-alpha' ),
		'desc'   => esc_html__( 'If you check this field, this post will be shown in the slider section in the header if it is enabled.', 'pine-alpha' ),
		'id'     => $prefix . 'show_in_slider', 
		'type'   => 'checkbox',
		'column' => true
	) );

}


/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function pine_alpha_get_option( $key = '', $default = false ) {
	if ( function_exists( 'cmb2_get_option' ) ) {
		// Use cmb2_get_option as it passes through some key filters.
		return cmb2_get_option( 'pine_alpha_theme_options', $key, $default );
	}
	// Fallback to get_option if CMB2 is not loaded yet.
	$opts = get_option( 'pine_alpha_theme_options', $default );
	$val = $default;
	if ( 'all' == $key ) {
		$val = $opts;
	} elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
		$val = $opts[ $key ];
	}
	return $val;
}