<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pine-alpha
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('list-item'); ?> style="color: <?php echo get_theme_mod( 'pine_alpha_general_colors_section_default' ); ?>;">
	<div class="list-item__meta">
        <?php pine_alpha_posted_on(); ?>
        <?php pine_alpha_get_category_list( $post->ID, true ); ?>
    </div>

	<h2 class="list-item__title">
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h2>

	<div class="list-item__content">
		<p class="list-item__excerpt">
			<?php echo wp_trim_words( get_the_excerpt(), $num_words = get_theme_mod( 'pine_alpha_layout_list_item_section_excerpt_length', 15 ), $more = '...' ); ?>
		</p>
	</div>

	<a href="<?php the_permalink(); ?>" class="list-item__read-more"><?php _e( 'Read More', 'pine-alpha' ); ?></a>
</article>