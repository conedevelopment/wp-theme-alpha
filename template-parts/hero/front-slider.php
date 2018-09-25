
<?php // Show four most recent posts.
$slider_posts = new WP_Query( array(
    'post_type'           => 'post',
    'posts_per_page'      => 12,
    'post_status'         => 'publish',
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
    'meta_key'            => 'pine_alpha_show_in_slider',
) );
?>

<?php if ( $slider_posts->have_posts() ) : ?>
    <div class="slider-posts">
        <?php while ( $slider_posts->have_posts() ) : $slider_posts->the_post(); ?>
            <?php
                $featured_img_url = get_the_post_thumbnail_url( $post->ID, 'alpha-slider-image-large' ); 
                $categories = get_the_category();
                $term_color = get_term_meta( $categories[0]->term_id, 'pine_alpha_category_color', true );
            ?>

            <a href="<?php the_permalink(); ?>"> 
                <div <?php post_class( 'slider-item' ); ?> style="background-image: url(<?php echo $featured_img_url; ?>); color: <?php echo $term_color; ?>;">
                    <div class="slider-item__caption">
                        <span class="slider-item__categories"><?php pine_alpha_get_category_list( $post->ID ); ?></span>
                        <h2 class="slider-item__title"><?php the_title(); ?></h2>
                        <span class="slider-item__date"><?php echo esc_html( get_the_date() ); ?></span>
                    </div>
                </div>
            </a>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div><!-- .recent-posts -->
<?php endif; ?>