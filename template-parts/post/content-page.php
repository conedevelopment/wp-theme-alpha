<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pine-alpha
 */

$sidebar_poisition = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_sidebar_poisition' )  ? get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) : 'right' );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content
		<?php
		if( $sidebar_poisition == 'none' ) {
			echo 'is-narrow';
		}
		?>
	">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pine-alpha' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
