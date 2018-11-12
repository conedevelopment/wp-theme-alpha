<article id="post-<?php the_ID(); ?>" <?php post_class('list-item'); ?>
    <?php if ( get_post_format() == 'gallery' ): ?> data-type="gallery" <?php endif; ?>
    <?php if ( get_post_format() == 'quote' ): ?> data-type="quote" <?php endif; ?>
    <?php if ( get_post_format() == 'aside' ): ?> data-type="aside" <?php endif; ?>

    <?php $terms = get_the_terms( get_the_ID(), 'category');
    if( !empty($terms) ) :
        $term = array_pop($terms); ?>
        style="color: <?php echo get_term_meta( $term->term_id, 'pine_alpha_category_color', true ); ?>;"
    <?php endif; ?>
>
    <?php
    $template_parts = get_theme_mod( 'pine_alpha_layout_list_item_section_order', array( 'image', 'meta', 'title', 'content', 'author', 'read-more' ) );

    foreach ( $template_parts as $template_part ) : ?>
    	<?php get_template_part( 'template-parts/post/list-parts/part-' . $template_part ); ?>
    <?php endforeach; ?>
</article>