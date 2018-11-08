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
	
	<header class="page-header
		<?php if( get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' ) == 'white' ) : ?>
			is-white
		<?php elseif( get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' ) == 'colorful' ) : ?>
			is-colorful
		<?php elseif( get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' ) == 'image' ) : ?>
			is-image
		<?php endif; ?>
		" style="
		<?php if( get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' ) == 'image' ) : ?>
			background-image: url(<?php echo wp_get_attachment_image_src( get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_cover_image_id', true ), 'large' )[0]; ?>); 
		<?php endif; ?>
		color: <?php echo get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_color', true ); ?>;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php
					the_archive_title( '<h1 class="page-header__title">', '</h1>' );
					the_archive_description( '<div class="page-header__description">', '</div>' );
					?>
				</div>
			</div>
		</div>
	</header>

	<?php get_template_part( 'template-parts/blog/blog', 'section' ); ?>
<?php
get_footer();
