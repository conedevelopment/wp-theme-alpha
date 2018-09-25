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

/**
 * Prevent switching to Alpha on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since 0.1.0
 */
function pine_alpha_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'pine_alpha_upgrade_notice' );
}
add_action( 'after_switch_theme', 'pine_alpha_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Alpha on WordPress versions prior to 4.7.
 *
 * @since 0.1.0
 *
 * @global string $wp_version WordPress version.
 */
function pine_alpha_upgrade_notice() {
	$message = sprintf( __( 'Alpha requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'pine_alpha' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since 0.1.0
 *
 * @global string $wp_version WordPress version.
 */
function pine_alpha_customize() {
	wp_die( sprintf( __( 'Alpha requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'pine_alpha' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'pine_alpha_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since 0.1.0
 *
 * @global string $wp_version WordPress version.
 */
function pine_alpha_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Alpha requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'pine_alpha' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'pine_alpha_preview' );
