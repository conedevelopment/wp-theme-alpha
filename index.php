<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		<?php 
			$image_url = get_theme_mod( 'pine_alpha_layout_blog_background' );
			$image_id = attachment_url_to_postid( $image_url );
			
			if( $image_id ) :
		?>
			background-image: url(<?php echo wp_get_attachment_image_src( $image_id, 'alpha-archive-header' )[0]; ?>); 
		<?php endif; ?>
		color: 
			<?php
			if( ! empty( get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_color', true ) ) ) {
				echo get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_color', true );
			} else {
				echo get_theme_mod( 'pine_alpha_general_colors_section_default' );
			}
			?>
		;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="page-header__title"><?php echo get_theme_mod( 'pine_alpha_layout_blog_section_title', __( 'Blog', 'pine-alpha' ) ); ?></h1>
					<?php if ( get_theme_mod( 'pine_alpha_layout_blog_description' ) ) : ?>
					<div class="page-header__description">
						<p><?php echo get_theme_mod( 'pine_alpha_layout_blog_description' ); ?></p>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<?php get_template_part( 'template-parts/blog/blog', 'section' ); ?>

<?php
get_footer();