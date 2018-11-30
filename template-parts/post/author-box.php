<?php
    $social_links = array( 'twitter', 'facebook', 'linkedin', 'instagram', 'flickr', 'tumblr', 'pinterest', 'github', 'youtube', 'dribbble', 'vk', 'spotify' );
?>

<div class="author-box">
    <div class="author-box__inside">
        <?php if( function_exists('get_avatar') ) : ?>
            <div class="author-box__image-wrapper">
                <?php echo get_avatar( get_the_author_meta('email'), '300' ); ?>
            </div>
        <?php endif; ?>
        <div class="author-box__content">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author-box__name">
                <h3><?php the_author_meta( 'display_name' ); ?></h3>
            </a>
            <p class="author-box__description">
                <?php the_author_meta('description') ?>
            </p>
            <div class="author-box__socials">
            <?php if ( get_the_author_meta( 'url' ) ) : ?>
                <a href="<?php the_author_meta( 'url' ); ?>" class="author-box__url" target="_blank" rel="noopener">
                    <?php _e( 'Website', 'pine-alpha' ); ?>
                </a>
            <?php endif;
            foreach ( $social_links as $social_link ) :
                if ( get_the_author_meta( $social_link ) ) :  ?>
                    <a href="<?php the_author_meta( $social_link ); ?>" class="author-box__social-item" target="_blank" rel="noopener">
                        <?php echo pine_alpha_get_svg( array( 'icon' => $social_link ) ); ?>
                    </a>
                <?php endif;
            endforeach; ?>
            </div>
        </div>
    </div>
</div>