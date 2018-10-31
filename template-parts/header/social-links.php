<div class="site-header__socials
    <?php
    $menu_visibility = get_theme_mod( 'pine_alpha_header_section_social_responsive_display', array( 'xs', 'sm', 'md' ) );

    if( ! empty( $menu_visibility ) ) {
        foreach ( $menu_visibility as $checked_value ) {
            echo 'd-only-' . $checked_value . '-none ';
        }
    }
    ?>
">

    <?php
    $social_links = get_theme_mod( 'pine_alpha_header_section_social_display_elements', array( 'twitter', 'facebook' ) );

    foreach ( $social_links as $social_link ) : ?>
        <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_' . $social_link ) ) : ?>
            <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_' . $social_link ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
                <?php echo pine_alpha_get_svg( array( 'icon' => $social_link ) ); ?>
            </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>