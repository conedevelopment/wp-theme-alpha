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
    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_twitter_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_twitter' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'twitter' ) ); ?>
        </a>
    <?php endif; ?>
    
    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_facebook_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_facebook' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'facebook' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_linkedin_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_linkedin' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'linkedin' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_instagram_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_instagram' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'instagram' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_flickr_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_flickr' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'flickr' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_tumblr_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_tumblr' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'tumblr' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_pinterest_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_pinterest' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'pinterest' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_github_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_github' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'github' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_youtube_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_youtube' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'youtube' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_dribbble_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_dribbble' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'dribbble' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_vk_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_vk' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'vk' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if( get_theme_mod( 'pine_alpha_general_social_links_section_show_spotify_in_header', 0 ) == 1 ) : ?>
        <a href="<?php echo get_theme_mod( 'pine_alpha_general_social_links_section_spotify' ); ?>" class="site-header__social-item" target="_blank" rel="noopener">
            <?php echo pine_alpha_get_svg( array( 'icon' => 'spotify' ) ); ?>
        </a>
    <?php endif; ?>
</div>