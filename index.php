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
	<header class="page-header is-blog
		<?php echo 'is-' . get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' );  ?>
		"
		style="
		<?php 
			$image_url = get_theme_mod( 'pine_alpha_layout_blog_background' );
			$image_id = attachment_url_to_postid( $image_url );
			
			if( get_theme_mod( 'pine_alpha_components_archive_title_section_sidebar_position', 'image' ) == 'image' && $image_id ) {
				echo 'background-image: url(' . wp_get_attachment_image_src( $image_id, 'alpha-archive-header' )[0] .');'; 
			}
		?>
		color:  <?php echo get_theme_mod( 'pine_alpha_general_colors_section_default' ); ?>;
	">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-10 col-md-8">
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

	<?php get_template_part( 'template-parts/blog/blog', 'section' );
	
get_footer();