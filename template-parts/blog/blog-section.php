<div class="container site-main-wrapper
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
                <div id="jetpack-infinite-scroll-wrapper" class="row">
                    <?php
                    while ( have_posts() ) :
                        the_post(); ?>
                        
                        <?php if ( is_search() ) : ?>
                            <div class="col-12">
                                <?php get_template_part( 'template-parts/post/content', 'search' ); ?>
                            </div>
                        <?php else : ?>
                            <div class="col-12 
                            <?php if( get_theme_mod( 'pine_alpha_layout_archive_pages_section_sidebar_position', 'right' ) == 'none' ) : ?>
                                col-sm-4
                            <?php else : ?>
                                col-sm-6
                            <?php endif; ?>
                            ">
                                <?php get_template_part( 'template-parts/post/content', 'list' ); ?>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <?php get_template_part( 'template-parts/post/content', 'none' ); ?>
            <?php endif; ?>

            <?php 
                if ( class_exists( 'Jetpack' ) && !Jetpack::is_module_active( 'infinite-scroll' ) ) {
                    the_posts_pagination();
                }
            ?>
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