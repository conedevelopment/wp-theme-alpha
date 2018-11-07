<?php if ( get_post_format() != 'quote' ): ?>
    <h2 class="list-item__title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>
<?php endif; ?>