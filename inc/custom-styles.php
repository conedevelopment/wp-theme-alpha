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

    $logo_width = get_theme_mod( 'pine_alpha_header_section_logo_width', '120' );

	$css = '

.site-header__logo img {
    width: ' . $logo_width . 'px;
}
    ';

    return $css;
}