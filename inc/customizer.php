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
	'default'     => 160,
	'choices'     => array(
		'min'  => '100',
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
	'type'        => 'multicheck',
	'settings'    => 'pine_alpha_header_section_navigation_responsive_display',
	'label'       => esc_attr__( 'Show Mobile Menu On', 'pine-alpha' ),
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
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_header_section_navigation_search',
	'label'       => esc_attr__( 'Show Search Field', 'pine-alpha' ),
	'section'     => 'pine_alpha_header_section_navigation',
	'default'     => '0',
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
	'settings'    => 'pine_alpha_header_section_navigation_top_bar',
	'label'       => esc_attr__( 'Enable Menu Top Bar', 'pine-alpha' ),
	'section'     => 'pine_alpha_header_section_display',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_header_section_navigation_top_bar_contact_info',
	'label'       => esc_attr__( 'Enable Contact Info', 'pine-alpha' ),
	'section'     => 'pine_alpha_header_section_display',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'pine_alpha', array(
	'type'        => 'toggle',
	'settings'    => 'pine_alpha_header_section_navigation_top_bar_socials',
	'label'       => esc_attr__( 'Enable Social Links', 'pine-alpha' ),
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