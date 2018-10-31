<div class="container">
	<div class="row">
		<main id="main" class="site-main col-8">
			<h2 class="section-title">
				<span class="section-title__helper"><?php _e( 'Latest Posts', 'pine-alpha' ); ?></span>
			</h2>
			<?php
			$latest_posts = new WP_Query( array(
				'post_type'           => 'post',
				'posts_per_page'      => 6,
				'post_status'         => 'publish',
			) );
			?>

			<?php if ( $latest_posts->have_posts() ) : ?>
				<div class="row">
					<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
						<div class="col-12 col-lg-6">
							<?php get_template_part( 'template-parts/post/content', 'list' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</main>
		<aside class="col-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>