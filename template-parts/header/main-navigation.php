<nav class="site-header__navigation
    <?php
    $menu_visibility = get_theme_mod( 'pine_alpha_header_section_navigation_responsive_display', array( 'xs', 'sm', 'md' ) );

    if( ! empty( $menu_visibility ) ) {
        foreach ( $menu_visibility as $checked_value ) {
            echo 'd-only-' . $checked_value . '-none ';
        }
    }
    ?>
">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'header',
        'menu_id'        => 'primary-menu',
    ) );
    ?>
</nav>