<?php
    $content = apply_filters( 'the_content', get_the_content() );
?>

<div <?php post_class('list-item'); ?>>
    <?php if ( has_post_thumbnail() && 
               get_post_format() != 'gallery' &&
               get_post_format() != 'audio' &&
               get_post_format() != 'video' &&
               get_post_format() != 'quote' &&
               get_post_format() != 'aside' ) : ?>
        <a href="<?php the_permalink(); ?>" class="list-item__image">
            <?php the_post_thumbnail( 'alpha-featured-image', array( 'class' => 'img-fluid' ) ); ?>
        </a>
    <?php endif; ?>

    <?php if ( get_post_format() == 'gallery' ): ?>
		<?php if ( get_post_gallery() ) : ?>
            <div class="list-item__gallery">
			    <?php echo wp_kses_post( get_post_gallery() ); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( get_post_format() == 'audio' ): ?>
        <?php if ( false === strpos( $content, 'wp-playlist-script' ) ) :
            $audio = get_media_embedded_in_content( $content, array( 'audio', 'iframe' ) ); ?>
            
            <?php if ( ! empty( $audio ) ) : ?>
                <div class="list-item__audio">
                    <?php echo $audio[0]; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( get_post_format() == 'video' ): ?>
        <?php if ( false === strpos( $content, 'wp-playlist-script' ) ) :
            $video = get_media_embedded_in_content( $content, array( 'audio', 'object', 'embed', 'iframe' ) ); ?>
            
            <?php if ( ! empty( $video ) ) : ?>
                <div class="list-item__video video-wrapper">
                    <?php echo $video[0]; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <div class="list-item__content
        <?php if ( get_post_format() == 'gallery' ): ?> is-gallery <?php endif; ?>
        <?php if ( get_post_format() == 'quote' ): ?> is-quote <?php endif; ?>
        <?php if ( get_post_format() == 'aside' ): ?> is-aside <?php endif; ?>
    ">
        
        <?php if ( get_post_format() != 'quote' ): ?>
            <?php if ( get_post_format() != 'aside' ): ?>
                <div class="list-item__meta">
                    <?php pine_alpha_posted_on(); ?>
                    <span class="list-item__separator"></span>
                    <?php pine_alpha_get_category_list( $post->ID ); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( get_post_format() == 'aside' ): ?><div class="list-item__aside"><?php endif; ?>

            <h2 class="list-item__title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <?php if ( get_post_format() == 'aside' ): ?><?php the_content(); ?><?php endif; ?>
            
            <?php if ( get_post_format() != 'aside' ): ?>
                <p class="list-item__excerpt">
                    <?php echo wp_trim_words( get_the_excerpt(), $num_words = 15, $more = '...' ); ?>
                </p>
            <?php endif; ?>

            <div class="list-item__author">
                <img src="<?php echo get_avatar_url( get_the_author_meta('user_email'), '80', '' ); ?>" alt="<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?>" />
                <span><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></span>
            </div>

            <?php if ( get_post_format() == 'aside' ): ?></div><?php endif; ?>
            
            <?php if ( get_post_format() != 'aside' ): ?>
                <a href="<?php the_permalink(); ?>" class="list-item__read-more"><?php _e( 'Read More', 'pine-alpha' ); ?></a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if ( get_post_format() == 'quote' ): ?>
            <div class="list-item__quote">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>