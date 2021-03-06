<?php
/**
 * pine-alpha Theme Customizer
 *
 * @package pine-alpha
 */

if( class_exists( 'Kirki' ) ) {
	/**
	 * Config Kirki
	 */
	Kirki::add_config( 'pine_alpha', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
		'option_name'   => 'pine_alpha',
	) );


	/**
	 * Add Header Panel
	 */
	Kirki::add_panel( 'pine_alpha_header', array(
		'priority'    => 60,
		'title'       => esc_attr__( 'Header', 'pine-alpha' )
	) );


	/**
	 * Add Header / Navigation Section
	 */
	Kirki::add_section( 'pine_alpha_header_section_navigation', array(
		'title'          => esc_attr__( 'Navigation', 'pine-alpha' ),
		'panel'          => 'pine_alpha_header',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_header_section_navigation_push_right',
		'label'       => esc_attr__( 'Push Navigation to The Right', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_navigation',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_header_section_navigation_remove_separator',
		'label'       => esc_attr__( 'Remove Separator', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_navigation',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_header_section_navigation_line_separator_1',
		'section'     => 'pine_alpha_header_section_navigation',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'multicheck',
		'settings'    => 'pine_alpha_header_section_navigation_responsive_display',
		'label'       => esc_attr__( 'Hide Navigation Menu On', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_navigation',
		'default'     => array('xs', 'sm', 'md'),
		'priority'    => 10,
		'choices'     => array(
			'xs' => esc_attr__( 'Extra small devices', 'pine-alpha' ),
			'sm' => esc_attr__( 'Small devices', 'pine-alpha' ),
			'md' => esc_attr__( 'Medium devices', 'pine-alpha' ),
			'lg' => esc_attr__( 'Large devices', 'pine-alpha' ),
			'xl' => esc_attr__( 'Extra large devices', 'pine-alpha' ),
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_header_section_navigation_line_separator_2',
		'section'     => 'pine_alpha_header_section_navigation',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'multicheck',
		'settings'    => 'pine_alpha_header_section_mobile_navigation_responsive_display',
		'label'       => esc_attr__( 'Hide Mobile Menu On', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_navigation',
		'default'     => array('lg', 'xl'),
		'priority'    => 10,
		'choices'     => array(
			'xs' => esc_attr__( 'Extra small devices', 'pine-alpha' ),
			'sm' => esc_attr__( 'Small devices', 'pine-alpha' ),
			'md' => esc_attr__( 'Medium devices', 'pine-alpha' ),
			'lg' => esc_attr__( 'Large devices', 'pine-alpha' ),
			'xl' => esc_attr__( 'Extra large devices', 'pine-alpha' ),
		),
	) );


	/**
	 * Add Header / Social Section
	 */
	Kirki::add_section( 'pine_alpha_header_section_socials', array(
		'title'          => esc_attr__( 'Socials', 'pine-alpha' ),
		'panel'          => 'pine_alpha_header',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_header_section_navigation_show_socials',
		'label'       => esc_attr__( 'Enable Social Links', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_socials',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_header_section_socials_line_separator_1',
		'section'     => 'pine_alpha_header_section_socials',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'multicheck',
		'settings'    => 'pine_alpha_header_section_social_responsive_display',
		'label'       => esc_attr__( 'Hide Social Menu On', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_socials',
		'default'     => array('xs', 'sm', 'md'),
		'priority'    => 10,
		'choices'     => array(
			'xs' => esc_attr__( 'Extra small devices', 'pine-alpha' ),
			'sm' => esc_attr__( 'Small devices', 'pine-alpha' ),
			'md' => esc_attr__( 'Medium devices', 'pine-alpha' ),
			'lg' => esc_attr__( 'Large devices', 'pine-alpha' ),
			'xl' => esc_attr__( 'Extra large devices', 'pine-alpha' ),
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_header_section_socials_line_separator_2',
		'section'     => 'pine_alpha_header_section_socials',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'sortable',
		'settings'    => 'pine_alpha_header_section_social_display_elements',
		'label'       => __( 'Social Link Order and Visibility', 'pine-alpha' ),
		'description' => esc_attr__( 'Here you can set the order of your social links.', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_socials',
		'default'     => array(
			'twitter',
			'facebook'
		),
		'choices'     => array(
			'twitter' => esc_attr__( 'Twitter', 'pine-alpha' ),
			'facebook' => esc_attr__( 'Facebook', 'pine-alpha' ),
			'linkedin' => esc_attr__( 'LinkedIn', 'pine-alpha' ),
			'instagram' => esc_attr__( 'Instagram', 'pine-alpha' ),
			'flickr' => esc_attr__( 'Flickr', 'pine-alpha' ),
			'tumblr' => esc_attr__( 'Tumblr', 'pine-alpha' ),
			'pinterest' => esc_attr__( 'Pinterest', 'pine-alpha' ),
			'github' => esc_attr__( 'GitHub', 'pine-alpha' ),
			'youtube' => esc_attr__( 'YouTube', 'pine-alpha' ),
			'dribbble' => esc_attr__( 'Dribbble', 'pine-alpha' ),
			'vk' => esc_attr__( 'VK', 'pine-alpha' ),
			'spotify' => esc_attr__( 'Spotify', 'pine-alpha' )
		),
		'priority'    => 10,
	) );


	/**
	 * Add Header / Display Section
	 */
	Kirki::add_section( 'pine_alpha_header_section_display', array(
		'title'          => esc_attr__( 'Display', 'pine-alpha' ),
		'panel'          => 'pine_alpha_header',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_header_section_navigation_sticky',
		'label'       => esc_attr__( 'Enable Sticky Navigation', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_display',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_header_section_navigation_search',
		'label'       => esc_attr__( 'Show Search', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_display',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_header_section_display_width',
		'label'       => __( 'Width', 'pine-alpha' ),
		'section'     => 'pine_alpha_header_section_display',
		'description' => esc_attr__( 'Set the width of the header container.', 'pine-alpha' ),
		'default'     => 'wide',
		'priority'    => 10,
		'choices'     => array(
			'narrow'   => esc_attr__( 'Narrow', 'pine-alpha' ),
			'wide' => esc_attr__( 'Wide', 'pine-alpha' )
		),
	) );


	/**
	 * Add General Panel
	 */
	Kirki::add_panel( 'pine_alpha_general', array(
		'priority'    => 60,
		'title'       => esc_attr__( 'General', 'pine-alpha' )
	) );


	/**
	 * Add General / Colors Section
	 */
	Kirki::add_section( 'pine_alpha_general_colors', array(
		'title'          => esc_attr__( 'Colors', 'pine-alpha' ),
		'panel'          => 'pine_alpha_general',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'color',
		'settings'    => 'pine_alpha_general_colors_section_default',
		'label'       => __( 'Default Color', 'pine-alpha' ),
		'description' => esc_attr__( 'Declare your theme default color. It will be used for basic UI elements.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_colors',
		'default'     => '#0095FF',
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'color',
		'settings'    => 'pine_alpha_general_colors_section_secondary',
		'label'       => __( 'Secondary Color', 'pine-alpha' ),
		'description' => esc_attr__( 'Declare your theme secondary color. It will be used mostly for :hover states.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_colors',
		'default'     => '#62BDFF',
	) );


	/**
	 * Add General / Social Section
	 */
	Kirki::add_section( 'pine_alpha_general_social_links', array(
		'title'          => esc_attr__( 'Social Links', 'pine-alpha' ),
		'panel'          => 'pine_alpha_general',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_twitter',
		'label'       => __( 'Twitter Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_0',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_facebook',
		'label'       => __( 'Facebook Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_1',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_linkedin',
		'label'       => __( 'LinkedIn Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_2',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_instagram',
		'label'       => __( 'Instagram Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_3',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_flickr',
		'label'       => __( 'Flickr Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_4',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_tumblr',
		'label'       => __( 'Tumblr Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_5',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_pinterest',
		'label'       => __( 'Pinterest Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_6',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_github',
		'label'       => __( 'GitHub Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_7',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_youtube',
		'label'       => __( 'YouTube Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_8',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_dribbble',
		'label'       => __( 'Dribbble Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_9',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_vk',
		'label'       => __( 'VK Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_general_social_links_line_separator_10',
		'section'     => 'pine_alpha_general_social_links',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );


	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'url',
		'settings'    => 'pine_alpha_general_social_links_section_spotify',
		'label'       => __( 'Spotify Page URL', 'pine-alpha' ),
		'description' => esc_attr__( 'Please give us a full URL.', 'pine-alpha' ),
		'section'     => 'pine_alpha_general_social_links'
	) );


	/**
	 * Add Components Panel
	 */
	Kirki::add_panel( 'pine_alpha_components', array(
		'priority'    => 60,
		'title'       => esc_attr__( 'Components', 'pine-alpha' ),
	) );


	/**
	 * Add Components / Categories Section
	 */
	Kirki::add_section( 'pine_alpha_components_categories', array(
		'title'          => esc_attr__( 'Categories', 'pine-alpha' ),
		'panel'          => 'pine_alpha_components',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'     => 'text',
		'settings' => 'pine_alpha_components_categories_section_title',
		'label'    => __( 'Section Title', 'pine-alpha' ),
		'section'  => 'pine_alpha_components_categories',
		'default'  => esc_attr__( 'Categories', 'pine-alpha' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_components_categories_section_hide_title',
		'label'       => esc_attr__( 'Hide Section Title', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_categories',
		'default'     => '1',
		'priority'    => 10,
	) );



	/**
	 * Add Components / Blogroll Section
	 */
	Kirki::add_section( 'pine_alpha_components_blogroll', array(
		'title'          => esc_attr__( 'Blogroll', 'pine-alpha' ),
		'panel'          => 'pine_alpha_components',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'     => 'text',
		'settings' => 'pine_alpha_components_blogroll_section_title',
		'label'    => __( 'Section Title', 'pine-alpha' ),
		'section'  => 'pine_alpha_components_blogroll',
		'default'  => esc_attr__( 'Latest Posts', 'pine-alpha' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_components_blogroll_section_hide_title',
		'label'       => esc_attr__( 'Hide Section Title', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_blogroll',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_components_blogroll_section_line_separator_1',
		'section'     => 'pine_alpha_components_blogroll',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_components_blogroll_section_sidebar_position',
		'label'       => __( 'Show Sidebar On', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_blogroll',
		'default'     => 'right',
		'priority'    => 10,
		'choices'     => array(
			'none'   => esc_attr__( 'None', 'pine-alpha' ),
			'left' => esc_attr__( 'Left', 'pine-alpha' ),
			'right'  => esc_attr__( 'Right', 'pine-alpha' ),
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_components_blogroll_section_type',
		'label'       => __( 'List Type', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_blogroll',
		'default'     => 'default',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_attr__( 'Default', 'pine-alpha' ),
			'secondary' => esc_attr__( 'Secondary', 'pine-alpha' )
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_components_blogroll_section_line_separator_2',
		'section'     => 'pine_alpha_components_blogroll',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'number',
		'settings'    => 'pine_alpha_components_blogroll_section_post_number',
		'label'       => esc_attr__( 'The Number of Posts to Show', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_blogroll',
		'default'     => 6,
		'choices'     => array(
			'min'  => 3,
			'max'  => 14,
			'step' => 1,
		),
	) );


	/**
	 * Add Components / Archive Title Section
	 */
	Kirki::add_section( 'pine_alpha_components_archive_title', array(
		'title'          => esc_attr__( 'Archive Title', 'pine-alpha' ),
		'panel'          => 'pine_alpha_components',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_components_archive_title_section_type',
		'label'       => __( 'Display Type', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_archive_title',
		'default'     => 'image',
		'priority'    => 10,
		'choices'     => array(
			'white'   => esc_attr__( 'White', 'pine-alpha' ),
			'colorful' => esc_attr__( 'Colorful', 'pine-alpha' ),
			'image'  => esc_attr__( 'Image', 'pine-alpha' ),
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_components_archive_title_section_size',
		'label'       => __( 'Heading Height', 'pine-alpha' ),
		'section'     => 'pine_alpha_components_archive_title',
		'default'     => 'medium',
		'priority'    => 10,
		'choices'     => array(
			'small'   => esc_attr__( 'Small', 'pine-alpha' ),
			'medium' => esc_attr__( 'Medium', 'pine-alpha' ),
			'large'  => esc_attr__( 'Large', 'pine-alpha' ),
		),
	) );


	/**
	 * Add Layout Panel
	 */
	Kirki::add_panel( 'pine_alpha_layout', array(
		'priority'    => 60,
		'title'       => esc_attr__( 'Layout', 'pine-alpha' )
	) );

	/**
	 * Add Layout / Front Page Section
	 */
	Kirki::add_section( 'pine_alpha_layout_front_page', array(
		'title'          => esc_attr__( 'Front Page', 'pine-alpha' ),
		'panel'          => 'pine_alpha_layout',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'sortable',
		'settings'    => 'pine_alpha_layout_front_page_section_order',
		'label'       => __( 'Component Order', 'pine-alpha' ),
		'description' => esc_attr__( 'Here you can set the component order for the Front Page.', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_front_page',
		'default'     => array(
			'hero',
			'categories',
			'blogroll'
		),
		'choices'     => array(
			'hero' => esc_attr__( 'Hero Section', 'pine-alpha' ),
			'categories' => esc_attr__( 'Categories Section', 'pine-alpha' ),
			'blogroll' => esc_attr__( 'Blogroll Section', 'pine-alpha' )
		),
		'priority'    => 10,
	) );


	/**
	 * Add Layout / List Item Section
	 */
	Kirki::add_section( 'pine_alpha_layout_list_item', array(
		'title'          => esc_attr__( 'List Item', 'pine-alpha' ),
		'panel'          => 'pine_alpha_layout',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'number',
		'settings'    => 'pine_alpha_layout_list_item_section_excerpt_length',
		'label'       => esc_attr__( 'Excerpt Length', 'pine-alpha' ),
		'description' => esc_attr__( 'Set the length of the excerpt text in words.', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_list_item',
		'default'     => 15,
		'choices'     => array(
			'min'  => 10,
			'max'  => 35,
			'step' => 1,
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'sortable',
		'settings'    => 'pine_alpha_layout_list_item_section_order',
		'label'       => __( 'Main Component Order', 'pine-alpha' ),
		'description' => esc_attr__( 'Here you can set the component order for the main list item.', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_list_item',
		'default'     => array(
			'image',
			'meta',
			'title',
			'content',
			'author',
			'read-more'
		),
		'choices'     => array(
			'image' => esc_attr__( 'Image', 'pine-alpha' ),
			'meta' => esc_attr__( 'Meta', 'pine-alpha' ),
			'title' => esc_attr__( 'Title', 'pine-alpha' ),
			'content' => esc_attr__( 'Content', 'pine-alpha' ),
			'author' => esc_attr__( 'Author', 'pine-alpha' ),
			'read-more' => esc_attr__( 'Read More', 'pine-alpha' )
		),
		'priority'    => 10,
	) );


	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'sortable',
		'settings'    => 'pine_alpha_layout_list_item_section_order_secondary',
		'label'       => __( 'Secondary Component Order', 'pine-alpha' ),
		'description' => esc_attr__( 'Here you can set the component order for the secondary (top or related posts) list item.', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_list_item',
		'default'     => array(
			'meta',
			'title',
			'content',
			'author'
		),
		'choices'     => array(
			'meta' => esc_attr__( 'Meta', 'pine-alpha' ),
			'title' => esc_attr__( 'Title', 'pine-alpha' ),
			'content' => esc_attr__( 'Content', 'pine-alpha' ),
			'author' => esc_attr__( 'Author', 'pine-alpha' )
		),
		'priority'    => 10,
	) );

	/**
	 * Add Layout / Archive Pages Section
	 */
	Kirki::add_section( 'pine_alpha_layout_archive_pages', array(
		'title'          => esc_attr__( 'Archive Pages', 'pine-alpha' ),
		'panel'          => 'pine_alpha_layout',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_layout_archive_pages_section_sidebar_position',
		'label'       => __( 'Show Sidebar On', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_archive_pages',
		'default'     => 'right',
		'priority'    => 10,
		'choices'     => array(
			'none'   => esc_attr__( 'None', 'pine-alpha' ),
			'left' => esc_attr__( 'Left', 'pine-alpha' ),
			'right'  => esc_attr__( 'Right', 'pine-alpha' ),
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_layout_archive_pages_section_type',
		'label'       => __( 'List Type', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_archive_pages',
		'default'     => 'default',
		'priority'    => 10,
		'choices'     => array(
			'default'   => esc_attr__( 'Default', 'pine-alpha' ),
			'secondary' => esc_attr__( 'Secondary', 'pine-alpha' )
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_layout_archive_pages_section_line_separator_1',
		'section'     => 'pine_alpha_layout_archive_pages',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	/**
	 * Add Layout / Blog Section
	 */
	Kirki::add_section( 'pine_alpha_layout_blog', array(
		'title'          => esc_attr__( 'Blog', 'pine-alpha' ),
		'panel'          => 'pine_alpha_layout',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'     => 'text',
		'settings' => 'pine_alpha_layout_blog_section_title',
		'label'    => __( 'Section Title', 'pine-alpha' ),
		'section'  => 'pine_alpha_layout_blog',
		'default'  => esc_attr__( 'Blog', 'pine-alpha' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'     => 'textarea',
		'settings' => 'pine_alpha_layout_blog_description',
		'label'    => __( 'Description', 'pine-alpha' ),
		'section'  => 'pine_alpha_layout_blog',
		'priority' => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'image',
		'settings'    => 'pine_alpha_layout_blog_background',
		'label'       => esc_attr__( 'Header Background Image', 'pine-alpha' ),
		'section'     => 'pine_alpha_layout_blog',
		'default'     => ''
	) );


	/**
	 * Add Footer Panel
	 */
	Kirki::add_panel( 'pine_alpha_footer', array(
		'priority'    => 60,
		'title'       => esc_attr__( 'Footer', 'pine-alpha' )
	) );

	/**
	 * Add Footer / Socials Section
	 */
	Kirki::add_section( 'pine_alpha_footer_section_socials', array(
		'title'          => esc_attr__( 'Socials', 'pine-alpha' ),
		'panel'          => 'pine_alpha_footer',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_footer_section_navigation_show_socials',
		'label'       => esc_attr__( 'Enable Social Links', 'pine-alpha' ),
		'section'     => 'pine_alpha_footer_section_socials',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_footer_section_socials_line_separator_1',
		'section'     => 'pine_alpha_footer_section_socials',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'multicheck',
		'settings'    => 'pine_alpha_footer_section_social_responsive_display',
		'label'       => esc_attr__( 'Hide Social Menu On', 'pine-alpha' ),
		'section'     => 'pine_alpha_footer_section_socials',
		'default'     => array('xs', 'sm', 'md'),
		'priority'    => 10,
		'choices'     => array(
			'xs' => esc_attr__( 'Extra small devices', 'pine-alpha' ),
			'sm' => esc_attr__( 'Small devices', 'pine-alpha' ),
			'md' => esc_attr__( 'Medium devices', 'pine-alpha' ),
			'lg' => esc_attr__( 'Large devices', 'pine-alpha' ),
			'xl' => esc_attr__( 'Extra large devices', 'pine-alpha' ),
		),
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_footer_section_socials_line_separator_2',
		'section'     => 'pine_alpha_footer_section_socials',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'sortable',
		'settings'    => 'pine_alpha_footer_section_social_display_elements',
		'label'       => __( 'Social Link Order and Visibility', 'pine-alpha' ),
		'description' => esc_attr__( 'Here you can set the order of your social links.', 'pine-alpha' ),
		'section'     => 'pine_alpha_footer_section_socials',
		'default'     => array(
			'twitter',
			'facebook'
		),
		'choices'     => array(
			'twitter' => esc_attr__( 'Twitter', 'pine-alpha' ),
			'facebook' => esc_attr__( 'Facebook', 'pine-alpha' ),
			'linkedin' => esc_attr__( 'LinkedIn', 'pine-alpha' ),
			'instagram' => esc_attr__( 'Instagram', 'pine-alpha' ),
			'flickr' => esc_attr__( 'Flickr', 'pine-alpha' ),
			'tumblr' => esc_attr__( 'Tumblr', 'pine-alpha' ),
			'pinterest' => esc_attr__( 'Pinterest', 'pine-alpha' ),
			'github' => esc_attr__( 'GitHub', 'pine-alpha' ),
			'youtube' => esc_attr__( 'YouTube', 'pine-alpha' ),
			'dribbble' => esc_attr__( 'Dribbble', 'pine-alpha' ),
			'vk' => esc_attr__( 'VK', 'pine-alpha' ),
			'spotify' => esc_attr__( 'Spotify', 'pine-alpha' )
		),
		'priority'    => 10,
	) );


	/**
	 * Add Footer / General Section
	 */
	Kirki::add_section( 'pine_alpha_footer_general', array(
		'title'          => esc_attr__( 'General', 'pine-alpha' ),
		'panel'          => 'pine_alpha_footer',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'     => 'textarea',
		'settings' => 'pine_alpha_footer_general_legal_copy',
		'label'    => __( 'Footnote', 'pine-alpha' ),
		'section'  => 'pine_alpha_footer_general',
		'default'  => esc_attr__( '© 2019 - Alpha, a magazine theme by Pine.', 'pine-alpha' ),
		'priority' => 10,
	) );


	/**
	 * Add Footer / ScrollTop Section
	 */
	Kirki::add_section( 'pine_alpha_footer_scrolltop', array(
		'title'          => esc_attr__( 'Scroll Top', 'pine-alpha' ),
		'panel'          => 'pine_alpha_footer',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_footer_scrolltop_enable',
		'label'       => esc_attr__( 'Enable Scroll Top', 'pine-alpha' ),
		'section'     => 'pine_alpha_footer_scrolltop',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'custom',
		'settings'    => 'pine_alpha_footer_scrolltop_line_separator_1',
		'section'     => 'pine_alpha_footer_scrolltop',
		'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
		'priority'    => 10,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'radio-buttonset',
		'settings'    => 'pine_alpha_footer_scrolltop_position',
		'label'       => __( 'Position', 'pine-alpha' ),
		'section'     => 'pine_alpha_footer_scrolltop',
		'default'     => 'is-right',
		'priority'    => 10,
		'choices'     => array(
			'is-left' => esc_attr__( 'Bottom left (Fixed)', 'pine-alpha' ),
			'is-right'   => esc_attr__( 'Bottom right (Fixed)', 'pine-alpha' )
		),
	) );


	/**
	 * Add Footer / Display Section
	 */
	Kirki::add_section( 'pine_alpha_footer_display', array(
		'title'          => esc_attr__( 'Display', 'pine-alpha' ),
		'panel'          => 'pine_alpha_footer',
		'priority'       => 160,
	) );

	Kirki::add_field( 'pine_alpha', array(
		'type'        => 'toggle',
		'settings'    => 'pine_alpha_footer_display_section_hide_widgets',
		'label'       => esc_attr__( 'Hide Widgets', 'pine-alpha' ),
		'section'     => 'pine_alpha_footer_display',
		'default'     => '0',
		'priority'    => 10,
	) );
}