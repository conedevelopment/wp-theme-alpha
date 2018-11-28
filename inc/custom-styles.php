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
    $default_color_lighter = color_luminance( $default_color, 0.5);
    $secondary_color = get_theme_mod( 'pine_alpha_general_colors_section_secondary', '#00f1ff' );
    
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

    $logo_height = get_theme_mod( 'pine_alpha_header_section_logo_height', '45' );

    $css = '
::selection {
    background:' . $secondary_color . ';
    color: #fff;
}

a,
.canvi-navigation a:hover,
.canvi-navigation a:focus,
.canvi-navigation a:active,
.canvi-navigation.current-menu-item > a,
.site-header__navigation li.current-menu-item > a,
.site-header__navigation a:hover,
.site-header__navigation a:focus,
.site-header__navigation a:active,
.site-header__navigation ul.menu > .menu-item-has-children:hover > a,
.widget.widget_rss .widget-title a,
.widget ul a:hover,
.widget ul a:focus,
.widget ul a:active,
#wp-calendar a,
.site-footer .widget a:hover,
.site-footer .widget a:focus,
.site-footer .widget a:active,
.site-footer .widget .tagcloud a:hover,
.site-footer .widget .tagcloud a:focus,
.site-footer .widget .tagcloud a:active {
    color: ' . $default_color . ';
}

.site-header__navigation ul.menu > .menu-item-has-children .menu-item-has-children:hover,
.site-header__navigation .sub-menu .current-menu-item,
.site-header__navigation .sub-menu a:hover,
.site-header__navigation .sub-menu a:focus,
.site-header__navigation .sub-menu a:active {
    background: ' . $default_color . ';
}

.site-header__navigation .sub-menu a:hover,
.site-header__navigation .sub-menu a:focus,
.site-header__navigation .sub-menu a:active {
    color: #fff;
}

a:hover,
a:active,
a:focus,
.widget.widget_rss .widget-title a:hover,
.widget.widget_rss .widget-title a:focus,
.widget.widget_rss .widget-title a:active,
#wp-calendar a:hover,
#wp-calendar a:focus,
#wp-calendar a:active {
    color:' . $secondary_color . ';
}

.site-header__search:hover,
.site-header__search:focus,
.site-header__search:active,
.scroll-to-top,
.navigation.pagination .page-numbers.current,
.navigation.pagination .page-numbers:hover,
.navigation.pagination .page-numbers:active,
.navigation.pagination .page-numbers:focus,
.widget .tagcloud a:hover,
.widget .tagcloud a:focus,
.widget .tagcloud a:active,
#wp-calendar caption,
.site-footer .widget .tagcloud a {
    background: linear-gradient(45deg, ' . $default_color . ', ' . $default_color_lighter . ');
}

.wpcf7-submit,
.btn,
.submit,
input[type="submit"] {
    background: linear-gradient(45deg, ' . $default_color . ', ' . $default_color_lighter . ');
    background-size: 140% auto;
    background-position: left top;
}

.social-item:hover .icon,
.social-item:active .icon,
.social-item:focus .icon,
.site-header__social-item:hover svg,
.site-header__social-item:focus svg,
.site-header__social-item:active svg {
    fill: ' . $default_color . ';
}

.entry-content input:not([type="submit"]):not([type="checkbox"]):not([type="radio"]):focus,
.entry-content select:focus,
.entry-content textarea:focus,
.comment-respond input:not([type="submit"]):not([type="checkbox"]):not([type="radio"]):focus,
.comment-respond select:focus,
.comment-respond textarea:focus {
    border-color: ' . $default_color . ';
}

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

.page-header.is-archive,
.page-header.is-blog {
    padding-top: '. $page_header_top_padding . 'rem;
    padding-bottom: '. $page_header_bottom_padding . 'rem;
}

.site-main-wrapper.is-component:not(.has-sidebar--white) .site-main {
    padding-top: '. $blogroll_section_padding_top . 'rem;
    padding-bottom: '. $blogroll_section_padding_bottom . 'rem;
}

.site-main-wrapper.is-component.has-sidebar--white {
    margin-top: '. $blogroll_section_padding_top . 'rem;
    margin-bottom: '. $blogroll_section_padding_bottom . 'rem;
}

.site-main-wrapper.is-component .site-sidebar.is-gray .site-sidebar__inside {
    padding-top: '. $blogroll_section_padding_top . 'rem !important;
    padding-bottom: '. $blogroll_section_padding_bottom . 'rem !important;
}

.site-header__logo img {
    height: calc('. $logo_height .'px - 10px);
}

@media (min-width: 768px) {
    .site-header__logo img {
        height: '. $logo_height .'px;
    }
}
    ';

    return $css;
}