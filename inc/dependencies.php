<?php
/**
 * pine-alpha Dependencies
 *
 * @package pine-alpha
 */

add_action( 'tgmpa_register', 'pine_alpha_register_required_plugins' );

function pine_alpha_register_required_plugins() {

	$plugins = array(

		/*
		* Recommended plugins.
		*/
		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => false,
		),

		array(
			'name'      => 'Kirki',
			'slug'      => 'kirki',
			'required'  => false,
		),
		array(
			'name'      => 'Jetpack by WordPress.com',
			'slug'      => 'jetpack',
			'required'  => false,
		),

		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

		array(
			'name'      => 'Schema',
			'slug'      => 'schema',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings.
	 */
	$config = array(
		'id'           => 'pine-alpha',
		'default_path' => '',
		'menu'         => 'tgmpa-install-plugins',
		'has_notices'  => true,
		'dismissable'  => true,
		'dismiss_msg'  => '',
		'is_automatic' => true,
		'message'      => '',
	);

	tgmpa( $plugins, $config );
}
