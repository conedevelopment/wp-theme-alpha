<?php
/**
 * pine-alpha Theme Customizer
 *
 * @package pine-alpha
 */

 
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
 * Add Header / Logo Section
 */
Kirki::add_section( 'pine_alpha_header_section_logo', array(
    'title'          => esc_attr__( 'Logo', 'pine-alpha' ),
    'panel'          => 'pine_alpha_header',
    'priority'       => 160,
) );

Kirki::add_field( 'pine_alpha', array(
    'type'        => 'image',
    'settings'    => 'pine_alpha_header_section_logo_image',
    'label'       => esc_attr__( 'Upload your logo', 'pine-alpha' ),
    'section'     => 'pine_alpha_header_section_logo',
    'default'     => '',
    'choices'     => array(
        'save_as' => 'array',
    ),
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
	'label'       => __( 'Set The Default Color', 'pine-alpha' ),
	'description' => esc_attr__( 'Declare your theme default color.', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_colors',
	'default'     => '#283dff',
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'color',
	'settings'    => 'pine_alpha_general_colors_section_secondary',
	'label'       => __( 'Set The Secondary Color', 'pine-alpha' ),
	'description' => esc_attr__( 'Declare your theme secondary color.', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_colors',
	'default'     => '#9748e5',
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
 * Add General / Display Section
 */
Kirki::add_section( 'pine_alpha_general_display', array(
    'title'          => esc_attr__( 'Display', 'pine-alpha' ),
    'panel'          => 'pine_alpha_general',
    'priority'       => 160,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_display_section_magnific_popup',
	'label'       => esc_attr__( 'Enable Magnific Popup', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_display',
	'default'     => '0',
	'priority'    => 10,
) );


Kirki::add_field( 'pine_alpha', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'pine_alpha_general_display_sidebar_type',
	'label'       => __( 'Sidebar Type', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_display',
	'description' => esc_attr__( 'Set the style of the sidebar.', 'pine-alpha' ),
	'default'     => 'gray',
	'priority'    => 10,
	'choices'     => array(
		'white'   => esc_attr__( 'White', 'pine-alpha' ),
		'gray' => esc_attr__( 'Gray', 'pine-alpha' )
	),
) );



/**
 * Add Components Panel
 */
Kirki::add_panel( 'pine_alpha_components', array(
    'priority'    => 60,
    'title'       => esc_attr__( 'Components', 'pine-alpha' )
) );

/**
 * Add Components / Popular Posts Section
 */
Kirki::add_section( 'pine_alpha_components_popular_posts', array(
    'title'          => esc_attr__( 'Popular Posts', 'pine-alpha' ),
    'panel'          => 'pine_alpha_components',
    'priority'       => 160,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'     => 'text',
	'settings' => 'pine_alpha_components_popular_posts_section_title',
	'label'    => __( 'Section Title', 'pine-alpha' ),
	'section'  => 'pine_alpha_components_popular_posts',
	'default'  => esc_attr__( 'Popular Posts', 'pine-alpha' ),
	'priority' => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_components_popular_posts_section_hide_title',
	'label'       => esc_attr__( 'Hide Section Title', 'pine-alpha' ),
	'section'     => 'pine_alpha_components_popular_posts',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_components_popular_posts_line_separator_1',
	'section'     => 'pine_alpha_components_popular_posts',
	'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'color-palette',
	'settings'    => 'pine_alpha_components_popular_posts_section_background',
	'label'       => esc_attr__( 'Background Color', 'pine-alpha' ),
	'description' => esc_attr__( 'Set the popular posts section background color. Use the light gray if the section is placed between white elements.', 'pine-alpha' ),
	'section'     => 'pine_alpha_components_popular_posts',
	'default'     => '#ffffff',
	'choices'     => array(
		'colors' => array( '#ffffff', '#f9f9f9' ),
		'style'  => 'round',
	),
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_components_popular_posts_line_separator_2',
	'section'     => 'pine_alpha_components_popular_posts',
	'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'number',
	'settings'    => 'pine_alpha_components_popular_posts_section_post_number',
	'label'       => esc_attr__( 'The Number of Posts to Show', 'pine-alpha' ),
	'section'     => 'pine_alpha_components_popular_posts',
	'default'     => 4,
	'choices'     => array(
		'min'  => 2,
		'max'  => 6,
		'step' => 1,
	),
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

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_components_categories_line_separator_1',
	'section'     => 'pine_alpha_components_categories',
	'default'     => '<hr style="margin: 6px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'color-palette',
	'settings'    => 'pine_alpha_components_categories_section_background',
	'label'       => esc_attr__( 'Background Color', 'pine-alpha' ),
	'description' => esc_attr__( 'Set the categories section background color. Use the light gray if the section is placed between white elements.', 'pine-alpha' ),
	'section'     => 'pine_alpha_components_categories',
	'default'     => '#f9f9f9',
	'choices'     => array(
		'colors' => array( '#ffffff', '#f9f9f9' ),
		'style'  => 'round',
	),
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
		'min'  => 6,
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
	'settings'    => 'pine_alpha_components_archive_title_section_sidebar_position',
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
	'type'        => 'number',
	'settings'    => 'pine_alpha_components_archive_title_padding_top',
	'label'       => esc_attr__( 'Padding Top', 'pine-alpha' ),
	'section'     => 'pine_alpha_components_archive_title',
	'description' => esc_attr__( 'You can define this value in rem. 1rem is (1 * the base font-size).', 'pine-alpha' ),
	'default'     => 3,
	'choices'     => array(
		'min'  => 2,
		'max'  => 8,
		'step' => 1,
	),
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'number',
	'settings'    => 'pine_alpha_components_archive_title_padding_bottom',
	'label'       => esc_attr__( 'Padding Bottom', 'pine-alpha' ),
	'section'     => 'pine_alpha_components_archive_title',
	'description' => esc_attr__( 'You can define this value in rem. 1rem is (1 * the base font-size).', 'pine-alpha' ),
	'default'     => 3,
	'choices'     => array(
		'min'  => 2,
		'max'  => 8,
		'step' => 1,
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
		'popular-posts',
		'categories',
		'blogroll'
	),
	'choices'     => array(
		'hero' => esc_attr__( 'Hero Section', 'pine-alpha' ),
		'popular-posts' => esc_attr__( 'Popular Posts Section', 'pine-alpha' ),
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
	'default'  => esc_attr__( '© 2018 - Aplha, a magazine theme by Pine.', 'pine-alpha' ),
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