<?php

$prefix = 'pine_alpha_';

add_action( 'cmb2_admin_init', 'pine_alpha_register_theme_options_metabox' );

/**
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function pine_alpha_register_theme_options_metabox() {
	
	$cmb_options = new_cmb2_box( array(
		'id'              => $prefix . 'theme_options_page',
		'title'           => esc_html__( 'Theme Options', 'cmb2' ),
		'object_types'    => array( 'options-page' ),
		'parent_slug'     => 'themes.php',
		'menu_title'      => esc_html__( 'Theme Options', 'cmb2' ), 
		'option_key'      => $prefix . 'theme_options',
	) );

	$cmb_options->add_field( array(
		'name' => 'Social Links',
		'desc' => 'The theme will use these social links in the header and the footer.',
		'type' => 'title',
		'id'   => $prefix . 'theme_options_social_title'
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Facebook', 'cmb2' ),
		'desc' => esc_html__( 'Please give a full URL with the protocol like https://twitter.com/thepinecode', 'cmb2' ),
		'id'   => $prefix . 'facebook_url',
		'type' => 'text_url',
		'protocols' => array('http', 'https')
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Twitter', 'cmb2' ),
		'desc' => esc_html__( 'Please give a full URL with the protocol like https://twitter.com/thepinecode', 'cmb2' ),
		'id'   => $prefix . 'twitter_url',
		'type' => 'text_url',
		'protocols' => array('http', 'https')
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'Instagram', 'cmb2' ),
		'desc' => esc_html__( 'Please give a full URL with the protocol like https://twitter.com/thepinecode', 'cmb2' ),
		'id'   => $prefix . 'instagram_url',
		'type' => 'text_url',
		'protocols' => array('http', 'https')
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'LinkedIn', 'cmb2' ),
		'desc' => esc_html__( 'Please give a full URL with the protocol like https://twitter.com/thepinecode', 'cmb2' ),
		'id'   => $prefix . 'linkedin_url',
		'type' => 'text_url',
		'protocols' => array('http', 'https')
	) );

	$cmb_options->add_field( array(
		'name' => esc_html__( 'YouTube', 'cmb2' ),
		'desc' => esc_html__( 'Please give a full URL with the protocol like https://twitter.com/thepinecode', 'cmb2' ),
		'id'   => $prefix . 'youtube_url',
		'type' => 'text_url',
		'protocols' => array('http', 'https')
	) );

	$cmb_options->add_field( array(
		'name' => 'Contact Informations',
		'desc' => 'The theme will use these contact informations in the header.',
		'type' => 'title',
		'id'   => $prefix . 'theme_options_contact_title'
	) );

	$cmb_options->add_field( array(
		'name'    => 'Email Address',
		'desc'    => 'Please give us your valid email address.',
		'id'      => $prefix . 'email_contact',
		'type'    => 'text_email'
	) );

}