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
	$css = '

a {
    
}
    ';

    return $css;
}