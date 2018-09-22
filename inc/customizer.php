<?php
/**
 * pine-alpha Theme Customizer
 *
 * @package pine-alpha
 */

Kirki::add_config( 'pine_alpha', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
    'option_name'   => 'pine_alpha',
) );

Kirki::add_panel( 'pine_header', array(
    'priority'    => 60,
    'title'       => esc_attr__( 'Header', 'pine-alpha' )
) );

Kirki::add_section( 'pine_header_section_logo', array(
    'title'          => esc_attr__( 'Logo', 'pine-alpha' ),
    'panel'          => 'pine_header',
    'priority'       => 160,
) );

Kirki::add_field( 'pine_alpha', array(
    'type'        => 'image',
    'settings'    => 'pine_header_section_logo_image',
    'label'       => esc_attr__( 'Upload your logo', 'pine-alpha' ),
    'section'     => 'pine_header_section_logo',
    'default'     => '',
    'choices'     => array(
        'save_as' => 'array',
    ),
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'slider',
	'settings'    => 'pine_header_section_logo_width',
	'label'       => esc_attr__( 'Set the max-width of the logo', 'pine-alpha' ),
	'section'     => 'pine_header_section_logo',
	'default'     => 160,
	'choices'     => array(
		'min'  => '100',
		'max'  => '260',
		'step' => '1',
	),
) );

Kirki::add_section( 'pine_header_section_navigation', array(
    'title'          => esc_attr__( 'Navigation', 'pine-alpha' ),
    'panel'          => 'pine_header',
    'priority'       => 160,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'multicheck',
	'settings'    => 'pine_header_section_navigation_responsive_display',
	'label'       => esc_attr__( 'Show Mobile Menu On', 'pine-alpha' ),
	'section'     => 'pine_header_section_navigation',
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
	'type'        => 'toggle',
	'settings'    => 'pine_header_section_navigation_search',
	'label'       => esc_attr__( 'Show Search Field', 'pine-alpha' ),
	'section'     => 'pine_header_section_navigation',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_section( 'pine_header_section_display', array(
    'title'          => esc_attr__( 'Display', 'pine-alpha' ),
    'panel'          => 'pine_header',
    'priority'       => 160,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_header_section_navigation_sticky',
	'label'       => esc_attr__( 'Enable Sticky Top Navigation', 'pine-alpha' ),
	'section'     => 'pine_header_section_display',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_header_section_navigation_top_bar',
	'label'       => esc_attr__( 'Enable Menu Top Bar', 'pine-alpha' ),
	'section'     => 'pine_header_section_display',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_header_section_navigation_top_bar_contact_info',
	'label'       => esc_attr__( 'Enable Contact Info', 'pine-alpha' ),
	'section'     => 'pine_header_section_display',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_header_section_navigation_top_bar_socials',
	'label'       => esc_attr__( 'Enable Social Links', 'pine-alpha' ),
	'section'     => 'pine_header_section_display',
	'default'     => '0',
	'priority'    => 10,
) );