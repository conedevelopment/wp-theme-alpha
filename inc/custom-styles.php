<?php
/**
 * Alpha: Color Patterns
 *
 * @package pine-alpha
 * @since 0.1.0
 */

/**
 * Generate the CSS for the current custom color scheme.
 */
function pine_alpha_custom_styles() {

    $default_color = get_theme_mod( 'pine_alpha_general_colors_section_default', '#283dff' );
    $secondary_color = '';

    $popular_posts_section_background_color = get_theme_mod( 'pine_alpha_components_popular_posts_section_background', '#ffffff' );
    $categories_section_background_color = get_theme_mod( 'pine_alpha_components_categories_section_background', '#f9f9f9' );

    $page_header_top_padding = get_theme_mod( 'pine_alpha_components_archive_title_padding_top', '3' );
    $page_header_bottom_padding = get_theme_mod( 'pine_alpha_components_archive_title_padding_bottom', '3' );

	$css = '

.highlighted-posts.is-popular {
    background: '. $popular_posts_section_background_color . ';
}

.highlighted-posts.is-popular .section-title .section-title__helper {
    background: '. $popular_posts_section_background_color . ';
}

.categories-section {
    background: '. $categories_section_background_color . ';
}

.categories-section .section-title .section-title__helper {
    background: '. $categories_section_background_color . ';
}

.page-header {
    padding-top: '. $page_header_top_padding . 'rem;
    padding-bottom: '. $page_header_bottom_padding . 'rem;
}

    ';

    return $css;
}