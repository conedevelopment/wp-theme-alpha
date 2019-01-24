<?php
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
                    <?php /*<div class="slider-item__categories"</div> */ ?>
                    <div class="slider-item__caption">
                        <span class="slider-item__meta">
                            <?php echo pine_alpha_posted_on(); ?>
                            <?php pine_alpha_get_category_list( $post->ID, false ); ?>
                        </span>
                        <h2 class="slider-item__title"><?php the_title(); ?></h2>
                        <div class="slider-item__author">
                            <img src="<?php echo get_avatar_url( get_the_author_meta('user_email'), '80', '' ); ?>" alt="<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?>" />
                            <span><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></span>
                        </div>
                    </div>
                </div>
            </a>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
<?php endif; ?>