<article id="post-<?php the_ID(); ?>" <?php post_class('list-item');
    if ( get_post_format() == 'gallery' ) { echo 'data-type="gallery"'; }
    if ( get_post_format() == 'quote' ) { echo 'data-type="quote"'; }
    if ( get_post_format() == 'aside' ) { echo 'data-type="aside"'; }

    $terms = get_the_terms( get_the_ID(), 'category');
    if( !empty($terms) ) :
        $term = array_shift($terms); ?>
        style="color: <?php echo get_term_meta( $term->term_id, 'pine_alpha_category_color', true ); ?>;"
    <?php endif; ?>
>    
    <?php 
    $template_parts = get_theme_mod( 'pine_alpha_layout_list_item_section_order', array( 'image', 'meta', 'title', 'content', 'author', 'read-more' ) );

    foreach ( $template_parts as $template_part ) {
    	get_template_part( 'template-parts/post/list-parts/part-' . $template_part );
    } ?>
</article>