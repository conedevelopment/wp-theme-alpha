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

$title_display_type = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_title_display_type' )  ? get_post_meta( get_the_ID(), '_pine_alpha_title_display_type', true ) : 'white' );
$title_padding_size = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_title_padding_size' )  ? get_post_meta( get_the_ID(), '_pine_alpha_title_padding_size', true ) : 'small' );
$show_meta_data = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_show_meta_data' )  ? get_post_meta( get_the_ID(), '_pine_alpha_show_meta_data', true ) : 'no' );
$sidebar_poisition = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_sidebar_poisition' )  ? get_post_meta( get_the_ID(), '_pine_alpha_sidebar_poisition', true ) : 'right' );
$sidebar_style = ( metadata_exists( 'post', get_the_ID(), '_pine_alpha_sidebar_style' )  ? get_post_meta( get_the_ID(), '_pine_alpha_sidebar_style', true ) : 'white' );

get_header();
?>
	<header class="page-header
		<?php 
			echo 'is-' . $title_display_type . ' ';
			echo 'is-' . $title_padding_size;
		?>
		"
		style="
		<?php 
			if( has_post_thumbnail() && $title_display_type == 'image' ) {
				echo 'background-image: url(' . get_the_post_thumbnail_url(get_the_ID(),'pine_alpha_category_cover_image_id') . ');';
			}

			echo 'color: ' . get_post_meta( get_the_ID(), '_pine_alpha_color', true ) . ';';
		?>
		">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<?php the_title( '<h1 class="page-header__title">', '</h1>' ); ?>
					<?php if ( $show_meta_data == 'yes' ) : ?>
						<div class="page-header__description"><?php pine_alpha_posted_on(); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>

	<?php if( $sidebar_poisition != 'none' ) : ?>
		<div class="container site-main-wrapper
			<?php 
				if( $sidebar_poisition != 'none' &&
					$sidebar_style == 'white' ) {
					echo 'has-sidebar--white';
				}
			?>
		">
			<div class="row">
				<?php if( $sidebar_poisition == 'left' ) : ?>
					<aside class="site-sidebar is-left col-12 col-lg-4
						is-<?php echo $sidebar_style; ?>
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

				<?php if( $sidebar_poisition == 'right' ) : ?>
					<aside class="site-sidebar is-right col-12 col-lg-4
						is-<?php echo $sidebar_style; ?>
					">
						<?php get_sidebar(); ?>
					</aside>
				<?php endif; ?>
			</div>
		</div>
	<?php else : ?>
		<div class="site-main-wrapper">
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
