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

	<div class="highlighted-posts">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section-title">
						<span class="section-title__helper">Popular Posts</span>
					</h2>
				</div>
				<?php
				$latest_posts = new WP_Query( array(
					'post_type'           => 'post',
					'posts_per_page'      => 4,
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true
				) );
				?>

				<?php if ( $latest_posts->have_posts() ) : ?>
					<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
						<div class="col-6">
							<?php get_template_part( 'template-parts/post/content', 'list-secondary' ); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php get_template_part( 'template-parts/components/categories', 'section' ); ?>
	
	<div class="container">
		<div class="row">
			<main id="main" class="site-main col-8">
				<h2 class="section-title">
					<span class="section-title__helper">Latest Posts</span>
				</h2>
				<?php
				$latest_posts = new WP_Query( array(
					'post_type'           => 'post',
					'posts_per_page'      => 6,
					'post_status'         => 'publish',
				) );
				?>

				<?php if ( $latest_posts->have_posts() ) : ?>
					<div class="row">
						<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
							<div class="col-6">
								<?php get_template_part( 'template-parts/post/content', 'list' ); ?>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</main>
			<aside class="col-4">
				<?php get_sidebar(); ?>
			</aside>
		</div>
	</div>
<?php
get_footer();
