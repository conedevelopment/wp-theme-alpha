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
	
	<header class="page-header" style="
		background-image: url(<?php echo wp_get_attachment_image_src( get_term_meta( get_queried_object()->term_id, 'pine_alpha_category_cover_image_id', true ), 'large' )[0]; ?>); 
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

	<div class="container">
		<div class="row">
			<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) == 'left' ) : ?>
				<aside class="site-sidebar is-left col-12 col-lg-4">
					<?php get_sidebar(); ?>
				</aside>
			<?php endif; ?>
			
			<main id="main" class="site-main col-12 
				<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) != 'none' ) : ?>
					col-lg-8
				<?php endif; ?>
			">
				<?php if ( have_posts() ) : ?>
					<div class="row">
						<?php
						while ( have_posts() ) :

							the_post(); ?>
							
							<div class="col-12 col-sm-6">
								<?php get_template_part( 'template-parts/post/content', 'list' ); ?>
							</div>

						<?php endwhile; ?>
					</div>
				<?php else: ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>

				<?php the_posts_pagination(); ?>
			</main>

			<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) == 'right' ) : ?>
				<aside class="site-sidebar is-right col-12 col-lg-4">
					<?php get_sidebar(); ?>
				</aside>
			<?php endif; ?>
		</div>
	</div>
<?php
get_footer();
