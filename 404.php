<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pine-alpha
 */

get_header();
?>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="page-404">
					<div class="page-404__inside">
						<span class="page-404__error-code">404</span>

						<h1 class="page-404__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pine-alpha' ); ?></h1>

						<p class="page-404__description"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pine-alpha' ); ?></p>

						<a href="<?php echo get_home_url(); ?>" class="btn"><?php esc_html_e( 'Go to Home', 'pine-alpha' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
