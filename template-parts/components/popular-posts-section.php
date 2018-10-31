<div class="highlighted-posts is-popular">
	<div class="container">
		<div class="row">
			<?php if( get_theme_mod( 'pine_alpha_components_popular_posts_section_hide_title', 0 ) == 0 &&
					  get_theme_mod( 'pine_alpha_components_popular_posts_section_title' )) : ?>
				<div class="col-12">
					<h2 class="section-title">
						<span class="section-title__helper">
							<?php echo esc_attr__( get_theme_mod( 'pine_alpha_components_popular_posts_section_title' ), 'pine-alpha'); ?>
						</span>
					</h2>
				</div>
			<?php endif; ?>
			<?php
			$latest_posts = new WP_Query( array(
				'post_type'           => 'post',
				'posts_per_page'      => 4,
				'post_status'         => 'publish',
				'ignore_sticky_posts' => true
			) );
			?>

			<?php if ( $latest_posts->have_posts() ) : ?>
				<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
					<div class="col-12 col-lg-6">
						<?php get_template_part( 'template-parts/post/content', 'list-secondary' ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>