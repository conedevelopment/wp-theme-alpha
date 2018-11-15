<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pine-alpha
 */

get_header();
?>

	<header class="page-header
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
				<div class="col-12">
					<?php the_title( '<h1 class="page-header__title">', '</h1>' ); ?>
				</div>
			</div>
		</div>
	</header>
	<div class="container page-wrapper">
		<div class="row">
			<?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) == 'left' ) : ?>
				<aside class="site-sidebar is-left col-12 col-lg-4
					is-<?php echo get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_type', 'white' ); ?>
				">
					<?php get_sidebar(); ?>
				</aside>
			<?php endif; ?>

			<main id="main" class="site-main col-12 
				<?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) != 'none' ) : ?>
					col-lg-8
				<?php endif; ?>
			">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/post/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;
				?>
			</main>

			<?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) == 'right' ) : ?>
				<aside class="site-sidebar is-right col-12 col-lg-4
					is-<?php echo get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_type', 'white' ); ?>
				">
					<?php get_sidebar(); ?>
				</aside>
			<?php endif; ?>
		</div>
	</div>
<?php
get_footer();
