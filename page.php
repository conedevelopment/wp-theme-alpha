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
			echo 'is-' . get_post_meta( get_the_ID(), '_pine_alpha_title_display_type', true ) . ' ';
			echo 'is-' . get_post_meta( get_the_ID(), '_pine_alpha_title_padding_size', true );
		?>
		"
		style="
		<?php 
			if( has_post_thumbnail() && get_post_meta( get_the_ID(), '_pine_alpha_title_display_type', true ) == 'image' ) {
				echo 'background-image: url(' . get_the_post_thumbnail_url(get_the_ID(),'pine_alpha_category_cover_image_id') . ');';
			}

			echo 'color: ' . get_post_meta( get_the_ID(), '_pine_alpha_color', true ) . ';';
		?>
		">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_title( '<h1 class="page-header__title">', '</h1>' ); ?>
					<?php if ( get_post_meta( get_the_ID(), '_pine_alpha_show_meta_data', 'no' ) == 'yes' ) : ?>
						<div class="page-header__description"><?php pine_alpha_posted_on(); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<?php if( get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) != 'none' ) : ?>
		<div class="container site-main-wrapper
			<?php 
				if( get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) != 'none' &&
					get_post_meta( get_the_ID(), '_pine_alpha_sidebar_style', true ) == 'white' ) {
					echo 'has-sidebar--white';
				}
			?>
		">
			<div class="row">
				<?php if( get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) == 'left' ) : ?>
					<aside class="site-sidebar is-left col-12 col-lg-4
						is-<?php echo get_post_meta( get_the_ID(), '_pine_alpha_sidebar_style', true ); ?>
					">
						<?php get_sidebar(); ?>
					</aside>
				<?php endif; ?>

				<main id="main" class="site-main col-lg-8">
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

				<?php if( get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) == 'right' ) : ?>
					<aside class="site-sidebar is-right col-12 col-lg-4
						is-<?php echo get_post_meta( get_the_ID(), '_pine_alpha_sidebar_style', true ); ?>
					">
						<?php get_sidebar(); ?>
					</aside>
				<?php endif; ?>
			</div>
		</div>
	<?php else : ?>
		<div class="site-main-wrapper
			<?php 
				if( get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) != 'none' &&
					get_post_meta( get_the_ID(), '_pine_alpha_sidebar_style', true ) == 'white' ) {
					echo 'has-sidebar--white';
				}
			?>
		">
			<main id="main" class="site-main is-single">
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
		</div>
	<?php endif; ?>
<?php
get_footer();
