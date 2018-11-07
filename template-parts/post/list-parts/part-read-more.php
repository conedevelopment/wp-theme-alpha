<?php if ( get_post_format() != 'quote' && get_post_format() != 'aside' ): ?>
    <a href="<?php the_permalink(); ?>" class="list-item__read-more"><?php _e( 'Read More', 'pine-alpha' ); ?></a>
<?php endif; ?>