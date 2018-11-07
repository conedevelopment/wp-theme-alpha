<div class="list-item__author">
    <a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
        <img src="<?php echo get_avatar_url( get_the_author_meta('user_email'), '80', '' ); ?>" alt="<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?>" />
        <span><?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></span>
    </a>
</div>