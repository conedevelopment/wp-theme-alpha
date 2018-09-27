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

	<?php get_template_part( 'template-parts/hero/front', 'slider' ); ?>

	<div class="categories-section">
		<div class="container">
			<div class="row">
				<?php
					$categories = get_terms( 'category', array(
						'orderby'    => 'rand',
						'hide_empty' => 0,
						'number'     => 4
					) );
				?>
				<?php if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
					<?php foreach ( $categories as $category ) : ?>
						<div class="col-3">
							<a href="<?php echo get_category_link( $category->term_id ); ?>" class="category-item" style="background-image: url(); color: <?php echo get_term_meta( $category->term_id, 'pine_alpha_category_color', true ); ?>;">
								<h3 class="category-item__name"><?php echo $category->name; ?></h3>
								<div class="category-item__background" style="background-image: url(<?php echo wp_get_attachment_image_src( get_term_meta( $category->term_id, 'pine_alpha_category_cover_image_id', true ), 'alpha-category-cover' )[0]; ?>);"></div>
							</a>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<main id="main" class="col-8">
				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/post/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</main>
			<aside class="col-4">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
<?php
get_footer();
