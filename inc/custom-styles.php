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
    $secondary_color = get_theme_mod( 'pine_alpha_general_colors_section_secondary', '#00f1ff' );
    
    $css = '
::selection {
    background:' . $secondary_color . ';
    color: #fff;
}

a,
.canvi-navigation a:hover,
.canvi-navigation a:focus,
.canvi-navigation a:active,
.canvi-navigation li.current-menu-item > a,
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
.author-box__name:hover h3, 
.author-box__name:focus h3, 
.author-box__name:active h3,
.list-item__meta a:hover,
.list-item__meta a:focus,
.list-item__meta a:active,
.list-item__title a:hover,
.list-item__title a:focus,
.list-item__title a:active,
.list-item__read-more:hover,
.list-item__read-more:focus,
.list-item__read-more:active {
    color: ' . $default_color . ';
}

.site-header__navigation ul.menu > .menu-item-has-children .menu-item-has-children:hover,
.site-header__navigation .sub-menu .current-menu-item,
.site-header__navigation .sub-menu a:hover,
.site-header__navigation .sub-menu a:focus,
.site-header__navigation .sub-menu a:active,
.author-box__url,
.scroll-to-top,
.site-header__search:hover,
.site-header__search:focus,
.site-header__search:active,
.navigation.pagination .page-numbers.current,
.navigation.pagination .page-numbers:hover,
.navigation.pagination .page-numbers:active,
.navigation.pagination .page-numbers:focus,
.widget .tagcloud a,
#wp-calendar caption,
.site-footer .widget .tagcloud a,
.wpcf7-submit,
.btn,
.submit,
input[type="submit"],
.wp-block-button__link,
.wp-block-file .wp-block-file__button,
#infinite-handle span {
    background: ' . $default_color . ';
}

.author-box__url:hover,
.author-box__url:focus,
.author-box__url:active {
    background: ' . $secondary_color . ';
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

.social-item:hover .icon,
.social-item:active .icon,
.social-item:focus .icon,
.site-header__social-item:hover svg,
.site-header__social-item:focus svg,
.site-header__social-item:active svg,
.author-box__social-item:hover svg,
.author-box__social-item:focus svg,
.author-box__social-item:active svg {
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

    ';

    return $css;
}