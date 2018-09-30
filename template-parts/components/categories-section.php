<div class="categories-section">
    <div class="container">
        <div class="row">
            <?php
                $categories = get_terms( 'category', array(
                    'orderby'    => 'rand',
                    'hide_empty' => 0,
                    'number'     => 4
                ) );
            ?>
            <?php if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
                <?php foreach ( $categories as $category ) : ?>
                    <div class="col-3">
                        <a href="<?php echo get_category_link( $category->term_id ); ?>" class="category-item" style="background-image: url(); color: <?php echo get_term_meta( $category->term_id, 'pine_alpha_category_color', true ); ?>;">
                            <h3 class="category-item__name"><?php echo $category->name; ?></h3>
                            <div class="category-item__background" style="background-image: url(<?php echo wp_get_attachment_image_src( get_term_meta( $category->term_id, 'pine_alpha_category_cover_image_id', true ), 'alpha-category-cover' )[0]; ?>);"></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>