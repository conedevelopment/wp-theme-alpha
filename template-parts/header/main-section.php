<?php 
    $site_logo = get_theme_mod( 'pine_alpha_header_section_logo_image' );
?>

<div class="
    <?php if( get_theme_mod( 'pine_alpha_header_section_display_width', 'wide' ) == 'wide' ) {
        echo 'container-fluid';
    } else {
        echo 'container';
    } ?>
">
    <div class="row">
        <div class="col-12 site-header__inside 
            <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_remove_separator', 0 ) == 1 ) : ?>
                has-no-menu-separator
            <?php endif; ?>
        ">
            <?php $image = get_theme_mod( 'pine_alpha_header_section_logo_image', '' ); ?>
            <div class="site-header__helper is-left">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header__logo">
                    <?php if( ! empty($site_logo['url']) ) : ?>
                        <img src="<?php echo esc_url( $image['url'] ); ?>" class="img-fluid" alt="<?php _e( 'Site Logo', 'pine-alpha' ); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/demo/logo.svg" class="img-fluid" alt="<?php _e( 'Alpha Theme Site Logo', 'pine-alpha' ); ?>">
                    <?php endif; ?>
                </a>
                
                <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_push_right', 0 ) == 0 ) : ?>
                    <?php get_template_part( 'template-parts/header/main', 'navigation' ); ?>
                <?php endif; ?>
            </div>
            <div class="site-header__helper is-right">
                <div class="site-header__search-helper">
                    <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_search', 0 ) == 1 ) : ?>
                        <?php get_template_part( 'template-parts/header/search', 'bar' ); ?>
                    <?php endif; ?>
                </div>

                <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_push_right', 0 ) == 1 ) : ?>
                    <?php get_template_part( 'template-parts/header/main', 'navigation' ); ?>
                <?php endif; ?>

                <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_show_socials', 1 ) == 1 ) : ?>
                    <?php get_template_part( 'template-parts/header/social', 'links' ); ?>
                <?php endif; ?>
                
                <?php if( get_theme_mod( 'pine_alpha_header_section_navigation_search', 0 ) == 1 ) : ?>
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