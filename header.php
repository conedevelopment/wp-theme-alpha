<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pine-alpha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="https://fonts.googleapis.com/css?family=Merriweather:400,700|Source+Sans+Pro:400,700&amp;subset=latin-ext" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'pine-alpha' ); ?></a>

	<div class="js-canvi-navbar--right canvi-navbar animate--in">
		<div class="canvi-navbar__inside">
			<div class="canvi-navbar__title"><?php _e( 'Navigation', 'pine-alpha' ); ?></div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_id'        => 'primary-menu-off-canvas',
					'menu_class'	 => 'canvi-navigation'
				) );
			?>
		</div>
	</div>

	<div class="js-canvi-content canvi-content">

		<header class="site-header">
			<?php get_template_part( 'template-parts/header/main', 'section' ); ?>
		</header>

		<?php /* if ( true == get_theme_mod( 'pine_alpha_header_section_navigation_search', true ) ) : ?>
			<p>Search is enabled</p>
		<?php else : ?>
			<p>Search is disabled</p>
		<?php endif; ?>

		<?php if ( pine_alpha_get_option( 'pine_alpha_theme_options_blog_schema_checkbox' ) ) : ?>
			pine_alpha_theme_options_blog_schema_checkbox
		<?php endif; ?>

		<?php if ( pine_alpha_get_option( 'pine_alpha_theme_options_author_box_checkbox' ) ) : ?>
			pine_alpha_theme_options_author_box_checkbox
		<?php endif; ?>

		<?php if ( pine_alpha_get_option( 'pine_alpha_theme_options_cookie_notification_checkbox' ) ) : ?>
			<?php echo pine_alpha_get_option( 'pine_alpha_theme_options_cookie_notification_text_textareacode' ); ?>
		<?php endif; ?>

		<?php if ( pine_alpha_get_option( 'pine_alpha_theme_options_code_head_textareacode' ) ) : ?>
			<?php echo pine_alpha_get_option( 'pine_alpha_theme_options_code_head_textareacode' ); ?>
		<?php endif; ?>

		<?php if ( pine_alpha_get_option( 'pine_alpha_theme_options_code_body_textareacode' ) ) : ?>
			<?php echo pine_alpha_get_option( 'pine_alpha_theme_options_code_body_textareacode' ); ?>
		<?php endif; ?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

		<?php
		$pine_alpha_description = get_bloginfo( 'description', 'display' );
		if ( $pine_alpha_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $pine_alpha_description; ?></p>
		<?php endif; */ ?>