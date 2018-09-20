<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package pine-alpha
 */

get_header();
?>

	<?php if ( have_posts() ) : ?>

		<?php
		/* translators: %s: search query. */
		printf( esc_html__( 'Search Results for: %s', 'pine-alpha' ), '<span>' . get_search_query() . '</span>' );
		?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'search' );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
	?>

<?php
get_sidebar();
get_footer();
