<?php
/**
 * Alpha back compat functionality
 *
 * Prevents Alpha from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package pine-alpha
 * @since 0.1.0
 */

namespace Conedevelopment\WordPress\Alpha;

use SzepeViktor\SentencePress\HookAnnotation;

class Back_Compat {

	protected $message;

	/**
	 * @global string $wp_version WordPress core version.
	 */
	public function __construct() {
		$this->message = sprintf(
			__( 'Alpha requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'pine-alpha' ),
			$GLOBALS['wp_version']
		);

		$this->hookMethods();
	}
		
	/**
	 * Prevent switching to Alpha on old versions of WordPress.
	 *
	 * Switches to the default theme.
	 *
	 * @since 0.1.0
	 *
	 * @hook after_switch_theme
	 */
	public function switch_theme() {
		switch_theme( WP_DEFAULT_THEME );
		unset( $_GET['activated'] );
		add_action( 'admin_notices', array( $this, 'upgrade_notice' ) );
	}

	/**
	 * Adds a message for unsuccessful theme switch.
	 *
	 * Prints an update nag after an unsuccessful attempt to switch to
	 * Alpha on WordPress versions prior to 4.7.
	 *
	 * @since 0.1.0
	 *
	 * @hook skip
	 */
	public function upgrade_notice() {
		printf( '<div class="error"><p>%s</p></div>', esc_html( $this->message ) );
	}

	/**
	 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
	 *
	 * @since 0.1.0
	 *
	 * @hook load-customize.php
	 */
	public function pine_alpha_customize() {
		wp_die( esc_html( $this->message ), '', array(
			'back_link' => true,
		) );
	}

	/**
	 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
	 *
	 * @since 0.1.0
	 *
	 * @hook template_redirect
	 */
	public function preview() {
		if ( isset( $_GET['preview'] ) ) {
			wp_die( esc_html( $this->message ) );
		}
	}

}
