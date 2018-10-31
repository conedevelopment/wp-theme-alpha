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

	<?php
    $template_parts = get_theme_mod( 'pine_alpha_layout_front_page_section_order', array( 'hero', 'popular-posts', 'categories', 'blogroll' ) );

    foreach ( $template_parts as $template_part ) : ?>
    	<?php get_template_part( 'template-parts/components/' . $template_part . '-section' ); ?>
    <?php endforeach; ?>

<?php
get_footer();
