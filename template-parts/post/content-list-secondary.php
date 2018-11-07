<div <?php post_class('list-item is-secondary'); ?>
    <?php $terms = get_the_terms( get_the_ID(), 'category');
    if( !empty($terms) ) :
        $term = array_pop($terms); ?>
        style="color: <?php echo get_term_meta( $term->term_id, 'pine_alpha_category_color', true ); ?>;"
    <?php endif; ?>
>
    <div class="list-item__image-wrapper">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="list-item__image">
                <?php the_post_thumbnail( 'alpha-featured-image-small', array( 'class' => 'img-fluid' ) ); ?>
            </a>
        <?php endif; ?>
    </div>

    <div class="list-item__content">
        <?php
        $template_parts = get_theme_mod( 'pine_alpha_layout_list_item_section_order_secondary', array( 'meta', 'title', 'content', 'author' ) );

        foreach ( $template_parts as $template_part ) : ?>
            <?php get_template_part( 'template-parts/post/secondary-list-parts/part-' . $template_part ); ?>
        <?php endforeach; ?>
    </div>
</div>