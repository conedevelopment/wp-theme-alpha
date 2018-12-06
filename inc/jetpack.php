<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package pine-alpha
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function pine_alpha_jetpack_setup() {
	// Add theme support for Infinite Scroll.
	add_theme_support( 'infinite-scroll', array(
		'container' => 'jetpack-infinite-scroll-wrapper',
		'render'    => 'pine_alpha_infinite_scroll_render',
		'footer'    => false,
		'wrapper'   => false
	) );
}
add_action( 'after_setup_theme', 'pine_alpha_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function pine_alpha_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) : ?>
			<div class="col-12">
				<?php get_template_part( 'template-parts/post/content', 'search' ); ?>
			</div>
		<?php else : ?>
			<div class="col-12 
			<?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) == 'none' ) : ?>
				col-sm-4
			<?php else : ?>
				col-sm-6
			<?php endif; ?>
			">
				<?php get_template_part( 'template-parts/post/content', 'list' ); ?>
			</div>
		<?php endif;
	}
}
