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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

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

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pine-alpha' ); ?></a>

	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

	<?php
	$pine_alpha_description = get_bloginfo( 'description', 'display' );
	if ( $pine_alpha_description || is_customize_preview() ) :
		?>
		<p class="site-description"><?php echo $pine_alpha_description; /* WPCS: xss ok. */ ?></p>
	<?php endif; ?>

	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	) );
	?>
