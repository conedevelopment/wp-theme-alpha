<?php 
    $site_logo = get_theme_mod( 'pine_alpha_header_section_logo_image', '' );
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 site-header__inside">
            <?php $image = get_theme_mod( 'pine_alpha_header_section_logo_image', '' ); ?>
            <div class="site-header__helper">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header__logo">
                    <?php if( ! empty($site_logo['url']) ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" class="img-fluid" alt="<?php _e( 'Site Logo', 'pine-alpha' ); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/demo/logo.svg" class="img-fluid" alt="<?php _e( 'Alpha Theme Site Logo', 'pine-alpha' ); ?>">
                    <?php endif; ?>
                </a>

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
            </div>
            <div class="site-header__helper">
                <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_show_socials', 1 ) == 1) : ?>
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
                        <a href="#" class="site-header__social-item">
                            <?php echo pine_alpha_get_svg( array( 'icon' => 'twitter' ) ); ?>
                        </a>
                        <a href="#" class="site-header__social-item">
                            <?php echo pine_alpha_get_svg( array( 'icon' => 'facebook' ) ); ?>
                        </a>
                        <a href="#" class="site-header__social-item">
                            <?php echo pine_alpha_get_svg( array( 'icon' => 'linkedin' ) ); ?>
                        </a>
                        <a href="#" class="site-header__social-item">
                            <?php echo pine_alpha_get_svg( array( 'icon' => 'instagram' ) ); ?>
                        </a>
                        <a href="#" class="site-header__social-item">
                            <?php echo pine_alpha_get_svg( array( 'icon' => 'youtube' ) ); ?>
                        </a>
                    </div>
                <?php endif; ?>
                
                <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_search', 0 ) == 1) : ?>
                    <button class="site-header__search">
                        <?php echo pine_alpha_get_svg( array( 'icon' => 'search' ) ); ?>
                    </button>
                <?php endif; ?>

                <button class="js-canvi-open-button--right site-header__toggle
                   <?php
                    $menu_visibility = get_theme_mod( 'pine_alpha_header_section_mobile_navigation_responsive_display', array( 'lg', 'xl' ) );

                    if( ! empty( $menu_visibility ) ) {
                        foreach ( $menu_visibility as $checked_value ) {
                            echo 'd-only-' . $checked_value . '-none ';
                        }
                    }
                    ?>
                ">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>