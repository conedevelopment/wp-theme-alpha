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

<body 
	<?php 
		body_class();
		if( get_theme_mod( 'pine_alpha_header_section_navigation_sticky', 0 ) == 1 ) { echo ' data-sticky="true"'; }
		if( get_theme_mod( 'pine_alpha_footer_scrolltop_enable', 0 ) == 1 ) { echo ' data-scroll-top="true"'; }
		if( get_theme_mod( 'pine_alpha_general_display_section_magnific_popup', 0 ) == 1 ) { echo ' data-magnific="true"'; }
		if( get_theme_mod( 'pine_alpha_general_display_section_highlight_js', 0 ) == 1 ) { echo ' data-highlight-js="true"'; }
	?>
>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'pine-alpha' ); ?></a>

	<div class="js-canvi-navbar--right canvi-navbar animate--in">
		<div class="canvi-navbar__inside">
			<div class="canvi-title"><?php _e( 'Navigation', 'pine-alpha' ); ?></div>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_id'        => 'primary-menu-off-canvas',
					'menu_class'	 => 'canvi-navigation'
				) );
			?>
			
			<div class="canvi-navbar__widgets">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div>
	</div>

	<div class="js-canvi-content canvi-content">
		<header class="site-header"
			<?php if( get_theme_mod( 'pine_alpha_header_section_navigation_sticky', 0 ) == 1 ) : ?> data-sticky="true" <?php endif; ?>
		>
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