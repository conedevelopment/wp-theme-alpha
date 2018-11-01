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
				<div class="row">
					<div class="col-3">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<div class="col-3">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<div class="col-3">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					<div class="col-3">
						<?php dynamic_sidebar( 'footer-4' ); ?>
					</div>
					<div class="col-12">
						<div class="site-footer__socials">
							<a href="#" class="social-item">
								<?php echo pine_alpha_get_svg( array( 'icon' => 'twitter' ) ); ?>
								<span class="social-item__name">Twitter</span>
							</a>
							<a href="#" class="social-item">
								<?php echo pine_alpha_get_svg( array( 'icon' => 'facebook' ) ); ?>
								<span class="social-item__name">Facebook</span>
							</a>
							<a href="#" class="social-item">
								<?php echo pine_alpha_get_svg( array( 'icon' => 'linkedin' ) ); ?>
								<span class="social-item__name">LinkedIn</span>
							</a>
						</div>
					</div>
					<div class="col-12">
						<p class="site-footer__copyright">© 2018 Alpha - A magazine theme. Some right reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>

</body>
</html>
