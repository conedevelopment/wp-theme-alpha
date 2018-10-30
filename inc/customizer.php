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

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'slider',
	'settings'    => 'pine_alpha_header_section_logo_width',
	'label'       => esc_attr__( 'Set the max-width of the logo', 'pine-alpha' ),
	'section'     => 'pine_alpha_header_section_logo',
	'default'     => 120,
	'choices'     => array(
		'min'  => '40',
		'max'  => '260',
		'step' => '1',
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
	'label'       => __( 'Twitter', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_twitter_in_header',
	'label'       => esc_attr__( 'Show Twitter in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_twitter_in_footer',
	'label'       => esc_attr__( 'Show Twitter in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_twitter_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_facebook',
	'label'       => __( 'Facebook', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_facebook_in_header',
	'label'       => esc_attr__( 'Show Facebook in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_facebook_in_footer',
	'label'       => esc_attr__( 'Show Facebook in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_facebook_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_linkedin',
	'label'       => __( 'LinkedIn', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_linkedin_in_header',
	'label'       => esc_attr__( 'Show LinkedIn in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_linkedin_in_footer',
	'label'       => esc_attr__( 'Show LinkedIn in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_linkedin_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_instagram',
	'label'       => __( 'Instagram', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_instagram_in_header',
	'label'       => esc_attr__( 'Show Instagram in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_instagram_in_footer',
	'label'       => esc_attr__( 'Show Instagram in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_instagram_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_flickr',
	'label'       => __( 'Flickr', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_flickr_in_header',
	'label'       => esc_attr__( 'Show Flickr in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_flickr_in_footer',
	'label'       => esc_attr__( 'Show Flickr in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_flickr_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_tumblr',
	'label'       => __( 'Tumblr', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_tumblr_in_header',
	'label'       => esc_attr__( 'Show Tumblr in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_tumblr_in_footer',
	'label'       => esc_attr__( 'Show Tumblr in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_tumblr_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_pinterest',
	'label'       => __( 'Pinterest', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_pinterest_in_header',
	'label'       => esc_attr__( 'Show Pinterest in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_pinterest_in_footer',
	'label'       => esc_attr__( 'Show Pinterest in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_pinterest_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_github',
	'label'       => __( 'GitHub', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_github_in_header',
	'label'       => esc_attr__( 'Show GitHub in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_github_in_footer',
	'label'       => esc_attr__( 'Show GitHub in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_github_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_youtube',
	'label'       => __( 'YouTube', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_youtube_in_header',
	'label'       => esc_attr__( 'Show YouTube in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_youtube_in_footer',
	'label'       => esc_attr__( 'Show YouTube in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_youtube_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_dribbble',
	'label'       => __( 'Dribbble', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_dribbble_in_header',
	'label'       => esc_attr__( 'Show Dribbble in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_dribbble_in_footer',
	'label'       => esc_attr__( 'Show Dribbble in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_dribbble_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_vk',
	'label'       => __( 'VK', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_vk_in_header',
	'label'       => esc_attr__( 'Show VK in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_vk_in_footer',
	'label'       => esc_attr__( 'Show VK in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_vk_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
	'priority'    => 10,
) );


Kirki::add_field( 'pine_alpha', array(
	'type'        => 'url',
	'settings'    => 'pine_alpha_general_social_links_section_spotify',
	'label'       => __( 'Spotify', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links'
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_spotify_in_header',
	'label'       => esc_attr__( 'Show Spotify in Header', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_general_social_links_section_show_spotify_in_footer',
	'label'       => esc_attr__( 'Show Spotify in Footer', 'pine-alpha' ),
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'custom',
	'settings'    => 'pine_alpha_general_social_links_section_spotify_separator',
	'section'     => 'pine_alpha_general_social_links',
	'default'     => '<hr style="margin: 10px 0; border: none; height: 1px; background: rgba(0,0,0,0.05);" />',
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
 * Add Footer / General Section
 */
Kirki::add_section( 'pine_alpha_footer_general', array(
    'title'          => esc_attr__( 'General', 'pine-alpha' ),
    'panel'          => 'pine_alpha_footer',
    'priority'       => 160,
) );

Kirki::add_field( 'theme_config_id', array(
	'type'     => 'textarea',
	'settings' => 'pine_alpha_footer_general_legal_copy',
	'label'    => __( 'Footnote', 'pine-alpha' ),
	'section'  => 'pine_alpha_footer_general',
	'default'  => esc_attr__( 'Some rights are reserved! © 2018', 'pine-alpha' ),
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
	'type'        => 'select',
	'settings'    => 'pine_alpha_footer_scrolltop_position',
	'label'       => __( 'Position', 'pine-alpha' ),
	'section'     => 'pine_alpha_footer_scrolltop',
	'default'     => 'bottom-right-fixed',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'bottom-right-fixed' => esc_attr__( 'Bottom right (Fixed)', 'pine-alpha' ),
		'bottom-left-fixed' => esc_attr__( 'Bottom left (Fixed)', 'pine-alpha' ),
		'footer' => esc_attr__( 'Footer', 'pine-alpha' ),
	),
) );