<div class="list-item__content">
    <?php if ( get_post_format() != 'quote' && get_post_format() == 'aside' ): ?><?php the_content(); ?><?php endif; ?>
    
    <?php if ( get_post_format() != 'quote' && get_post_format() != 'aside' ): ?>
        <p class="list-item__excerpt">
            <?php echo get_the_excerpt(); ?>
        </p>
    <?php endif; ?>

    <?php if ( get_post_format() == 'quote' ): ?>
        <div class="list-item__quote">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</div>