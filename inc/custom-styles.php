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
    $popular_posts_section_padding_top = get_theme_mod( 'pine_alpha_components_popular_posts_section_padding_top', '3' );
    $popular_posts_section_padding_bottom = get_theme_mod( 'pine_alpha_components_popular_posts_section_padding_bottom', '1' );
    
    $categories_section_background_color = get_theme_mod( 'pine_alpha_components_categories_section_background', '#f9f9f9' );
    $categories_section_padding_top = get_theme_mod( 'pine_alpha_components_categories_section_padding_top', '3' );
    $categories_section_padding_bottom = get_theme_mod( 'pine_alpha_components_categories_section_padding_bottom', '3' );

    $blogroll_section_padding_top = get_theme_mod( 'pine_alpha_components_blogroll_section_padding_top', '3' );
    $blogroll_section_padding_bottom = get_theme_mod( 'pine_alpha_components_blogroll_section_padding_bottom', '3' );

    $page_header_top_padding = get_theme_mod( 'pine_alpha_components_archive_title_padding_top', '3' );
    $page_header_bottom_padding = get_theme_mod( 'pine_alpha_components_archive_title_padding_bottom', '3' );

	$css = '

.highlighted-posts.is-popular {
    background: '. $popular_posts_section_background_color . ';
    padding-top: '. $popular_posts_section_padding_top . 'rem;
    padding-bottom: '. $popular_posts_section_padding_bottom . 'rem;
}

.highlighted-posts.is-popular .section-title .section-title__helper {
    background: '. $popular_posts_section_background_color . ';
}

.categories-section {
    background: '. $categories_section_background_color . ';
    padding-top: '. $categories_section_padding_top . 'rem;
    padding-bottom: '. $categories_section_padding_bottom . 'rem;
}

.categories-section .section-title .section-title__helper {
    background: '. $categories_section_background_color . ';
}

.page-header {
    padding-top: '. $page_header_top_padding . 'rem;
    padding-bottom: '. $page_header_bottom_padding . 'rem;
}

.blogroll-wrapper.is-component .site-main {
    padding-top: '. $blogroll_section_padding_top . 'rem;
    padding-bottom: '. $blogroll_section_padding_bottom . 'rem;
}

.blogroll-wrapper.is-component.has-sidebar--white {
    margin-top: '. $blogroll_section_padding_top . 'rem;
    margin-bottom: '. $blogroll_section_padding_bottom . 'rem;
}

.blogroll-wrapper.is-component .site-sidebar.is-gray .site-sidebar__inside {
    padding-top: '. $blogroll_section_padding_top . 'rem !important;
    padding-bottom: '. $blogroll_section_padding_bottom . 'rem !important;
}

    ';

    return $css;
}