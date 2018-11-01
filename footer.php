<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pine-alpha
 */

?>

		<div class="site-footer">
			<div class="container">
				<div class="site-footer__widgets row">
					<div class="col-12 col-md-6 col-lg-3">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					<div class="col-12 col-md-6 col-lg-3">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
				</div>
				<div class="row">
					<?php if( get_theme_mod( 'pine_alpha_footer_section_navigation_show_socials', 1 ) == 1 ) : ?>
						<div class="col-12">
							<?php get_template_part( 'template-parts/footer/social', 'links' ); ?>
						</div>
					<?php endif; ?>
					<div class="col-12">
						<p class="site-footer__copyright">
							<?php echo get_theme_mod( 'pine_alpha_footer_general_legal_copy' ); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<?php if( get_theme_mod( 'pine_alpha_footer_scrolltop_enable', 0 ) == 1 ) : ?>
			<span class="scroll-to-top 
				<?php echo get_theme_mod( 'pine_alpha_footer_scrolltop_position', 'is-right' ); ?>
			">
				<?php echo pine_alpha_get_svg( array( 'icon' => 'keyboard-arrow-up' ) ); ?>
			</span>
		<?php endif; ?>
	</div>
<?php wp_footer(); ?>

</body>
</html>
