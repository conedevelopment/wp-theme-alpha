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

	<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'pine-alpha' ); ?>
	<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'pine-alpha' ); ?>

<?php
get_footer();
