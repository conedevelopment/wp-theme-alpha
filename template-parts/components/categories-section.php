<div class="categories-section">
    <div class="container">
        <div class="row">
            <?php if( get_theme_mod( 'pine_alpha_components_categories_section_hide_title', 0 ) == 0 &&
					  get_theme_mod( 'pine_alpha_components_categories_section_title' )) : ?>
				<div class="col-12">
					<h2 class="section-title">
						<span class="section-title__helper">
							<?php echo esc_attr__( get_theme_mod( 'pine_alpha_components_categories_section_title' ), 'pine-alpha'); ?>
						</span>
					</h2>
				</div>
			<?php endif; ?>
            <?php
                $categories = get_terms( 'category', array(
                    'hide_empty' => 0,
                    'number'     => 4
                ) );

                shuffle( $categories );
            ?>
        </div>
        <div class="row categories-section__inside">
            <?php if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) : ?>
                <?php foreach ( $categories as $category ) : ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <a href="<?php echo get_category_link( $category->term_id ); ?>" class="category-item" style="color: <?php echo get_term_meta( $category->term_id, 'pine_alpha_category_color', true ); ?>;">
                            <h3 class="category-item__name"><?php echo $category->name; ?></h3>
                            <div class="category-item__background" style="background-image: url(<?php echo wp_get_attachment_image_src( get_term_meta( $category->term_id, 'pine_alpha_category_cover_image_id', true ), 'alpha-category-cover' )[0]; ?>);"></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>