<?php

/**
 * Adds welcome page sub menu.
 *
 * @since 0.1.0
 */
function pine_alpha_welcome_page() {
 
  global $pine_alpha_sub_menu;
 
  $pine_alpha_sub_menu = add_theme_page(
      __( 'Welcome to Alpha! - Version ' . THEME_VERSION, 'pine-alpha' ),
      __( 'About Alpha', 'pine-alpha' ),
      'read',
      'pine_alpha_welcome_page',
      'pine_alpha_welcome_page_content'
  );
 
}
 
add_action( 'admin_menu', 'pine_alpha_welcome_page' );
 
/**
 * Welcome page content.
 *
 * @since 0.1.0
 */
function pine_alpha_welcome_page_content() {
 
    if ( file_exists( __DIR__ . '/welcome/view.php') ) {
 
       require_once( __DIR__ . '/welcome/view.php' );
 
    }
}