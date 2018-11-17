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
	<header class="page-header is-white">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="page-header__title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'pine-alpha' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</div>
			</div>
		</div>
	</header>

	<?php get_template_part( 'template-parts/blog/blog', 'section' );
	
get_footer();
