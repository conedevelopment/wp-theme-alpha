<div class="container blogroll-wrapper is-component
	<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) != 'none' &&
			  get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_type', 'white' ) == 'white' ) : ?>
		has-sidebar--white
	<?php endif; ?>
">
	<div class="row">
		<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) == 'left' ) : ?>
			<aside class="site-sidebar is-left col-12 col-lg-4
				is-<?php echo get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_type', 'white' ); ?>
			">
				<?php get_sidebar(); ?>
			</aside>
		<?php endif; ?>
		
		<main id="main" class="site-main col-12 
			<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) != 'none' ) : ?>
				col-lg-8
			<?php endif; ?>
		">
			<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_hide_title', 0 ) == 0 &&
					  get_theme_mod( 'pine_alpha_components_blogroll_section_title' )) : ?>
				<h2 class="section-title">
					<span class="section-title__helper">
						<?php echo esc_attr__( get_theme_mod( 'pine_alpha_components_blogroll_section_title' ), 'pine-alpha'); ?>
					</span>
				</h2>
			<?php endif; ?>

			<?php
			$latest_posts = new WP_Query( array(
				'post_type'           => 'post',
				'posts_per_page'      => get_theme_mod( 'pine_alpha_components_blogroll_section_post_number', 6 ),
				'post_status'         => 'publish',
			) );
			?>

			<?php if ( $latest_posts->have_posts() ) : ?>
				<div class="row">
					<?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
						<div class="col-12 
						<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) == 'none' ) : ?>
							col-sm-4
						<?php else : ?>
							col-sm-6
						<?php endif; ?>
						">
							<?php get_template_part( 'template-parts/post/content', 'list' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</main>

		<?php if( get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_position', 'right' ) == 'right' ) : ?>
			<aside class="site-sidebar is-right col-12 col-lg-4
				is-<?php echo get_theme_mod( 'pine_alpha_components_blogroll_section_sidebar_type', 'white' ); ?>
			">
				<?php get_sidebar(); ?>
			</aside>
		<?php endif; ?>
	</div>
</div>