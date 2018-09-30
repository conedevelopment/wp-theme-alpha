<div <?php post_class('list-item'); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="list-item__image">
            <?php the_post_thumbnail( 'alpha-featured-image', array( 'class' => 'img-fluid' ) ); ?>
        </a>
    <?php endif; ?>

    <div class="list-item__content">
        <div class="list-item__meta">
            <?php pine_alpha_posted_on(); ?>
            <span class="list-item__separator"></span>
            <?php pine_alpha_get_category_list( $post->ID ); ?>
        </div>
        
        <h2 class="list-item__title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>

        <p class="list-item__excerpt">
            <?php echo wp_trim_words( get_the_excerpt(), $num_words = 15, $more = '...' ); ?>
        </p>

        <div class="list-item__author">
            <img src="<?php echo get_avatar_url( get_the_author_meta('user_email'), '80', '' ); ?>" alt="<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?>" />
            <span><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></span>
        </div>

        <a href="<?php the_permalink(); ?>" class="list-item__read-more"><?php _e( 'Read More', 'pine-alpha' ); ?></a>
    </div>
</div>