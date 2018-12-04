<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pine-alpha
 */

get_header();
?>
	<header class="page-header is-archive
		<?php 
			if( empty( get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_color', true ) ) ) {
				echo 'is-white';
			} else {
				echo 'is-' . get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' );
			}
		?>
		"
		style="
		<?php 
			if( get_queried_object() && get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' ) == 'image' ) {
				echo 'background-image: url(' . wp_get_attachment_image_src( get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_cover_image_id', true ), 'alpha-archive-header' )[0] . ');';
			}
			
			if ( get_queried_object() && ! empty( get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_color', true ) ) ) {
				echo 'color: ' . get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_color', true ) . ';';
			}
		?>
		">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-10 col-md-8">
					<?php
					the_archive_title( '<h1 class="page-header__title">', '</h1>' );
					the_archive_description( '<div class="page-header__description">', '</div>' );
					?>
				</div>
			</div>
		</div>
	</header>

	<?php get_template_part( 'template-parts/blog/blog', 'section' );
	
get_footer();
