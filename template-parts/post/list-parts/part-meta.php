<?php if ( get_post_format() != 'quote' && get_post_format() != 'aside' ): ?>
    <div class="list-item__meta">
        <?php pine_alpha_posted_on(); ?>
        <?php pine_alpha_get_category_list( $post->ID, true ); ?>
    </div>
<?php endif; ?>