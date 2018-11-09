<div class="list-item__content">
    <?php if ( get_post_format() != 'quote' && get_post_format() == 'aside' ): ?><?php the_content(); ?><?php endif; ?>
    
    <?php if ( get_post_format() != 'quote' && get_post_format() != 'aside' ): ?>
        <p class="list-item__excerpt">
            <?php echo wp_trim_words( get_the_excerpt(), $num_words = get_theme_mod( 'pine_alpha_layout_list_item_section_excerpt_length', 15 ), $more = '...' ); ?>
        </p>
    <?php endif; ?>

    <?php if ( get_post_format() == 'quote' ): ?>
        <div class="list-item__quote">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</div>