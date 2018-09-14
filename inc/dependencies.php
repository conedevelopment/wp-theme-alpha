<?php

add_action( 'tgmpa_register', 'pine_alpha_register_required_plugins' );

function pine_alpha_register_required_plugins() {

	$plugins = array(

		/*
		* Required plugins.
		*/
		array(
			'name'      => 'CMB2',
			'slug'      => 'cmb2',
			'required'  => true,
		),

		array(
			'name'      => 'Kirki',
			'slug'      => 'kirki',
			'required'  => true,
		),

		/*
		* Recommended plugins.
		*/
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
			'name'      => 'Custom Post Type UI',
			'slug'      => 'custom-post-type-ui',
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
