<div class="container blogroll-wrapper
<?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) != 'none' &&
          get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_type', 'white' ) == 'white' ) : ?>
    has-sidebar--white
<?php endif; ?>
">
    <div class="row">
        <?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) == 'left' ) : ?>
            <aside class="site-sidebar is-left col-12 col-lg-4
                is-<?php echo get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_type', 'white' ); ?>
            ">
                <?php get_sidebar(); ?>
            </aside>
        <?php endif; ?>
        
        <main id="main" class="site-main col-12 
            <?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) != 'none' ) : ?>
                col-lg-8
            <?php endif; ?>
        ">
            <?php if ( have_posts() ) : ?>
                <div class="row">
                    <?php
                    while ( have_posts() ) :

                        the_post(); ?>
                        
                        <div class="col-12 col-sm-6">
                            <?php get_template_part( 'template-parts/post/content', 'list' ); ?>
                        </div>

                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

            <?php the_posts_pagination(); ?>
        </main>

        <?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) == 'right' ) : ?>
            <aside class="site-sidebar is-right col-12 col-lg-4
                is-<?php echo get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_type', 'white' ); ?>
            ">
                <?php get_sidebar(); ?>
            </aside>
        <?php endif; ?>
    </div>
</div>