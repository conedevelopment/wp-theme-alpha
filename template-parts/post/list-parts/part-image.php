<?php
    $content = apply_filters( 'the_content', get_the_content() );
?>

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