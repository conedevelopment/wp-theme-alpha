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

	<?php
	/* translators: %s: CMS name, i.e. WordPress. */
	printf( esc_html__( 'Proudly powered by %s', 'pine-alpha' ), 'WordPress' );
	?>

	<?php
	/* translators: 1: Theme name, 2: Theme author. */
	printf( esc_html__( 'Theme: %1$s by %2$s.', 'pine-alpha' ), 'pine-alpha', '<a href="http://underscores.me/">Underscores.me</a>' );
	?>

<?php wp_footer(); ?>

</body>
</html>
