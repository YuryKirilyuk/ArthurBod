<?php
/*
  Template Name: About Page
*/


get_header(); ?>

    <main id="main" class="site-main page-about">

        <section class="section-hero">

            <div class="section-main">
                <aside>

                    <nav class="custom-menu mobile">
                        <?php echo do_shortcode( '[customMenu]' ); ?>
                    </nav>

                    <div class="site-info">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">AB</a>
                        </div>
                        <div class="author">
                            <h1 class="name"><?php bloginfo('name'); ?></h1>
                            <p class="subtitle"><?php bloginfo('description'); ?></p>
                        </div>
                    </div>

                    <div class="socials">
                        <a href="<?php the_field('instagram', 'option'); ?>" class="in" target="_blank"></a>
                        <a href="<?php the_field('facebook', 'option'); ?>" class="fb" target="_blank"></a>
                    </div>
                </aside>

                <div class="page-content">

                    <nav class="custom-menu">
                        <?php echo do_shortcode( '[customMenu]' ); ?>
                    </nav>

                    <div class="content">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                            <div class="entry-content-page">
                                <?php the_content(); ?>
                            </div><!-- .entry-content-page -->

                        <?php endwhile; endif; ?>
                    </div><!-- //.content -->

                </div><!-- //.page-content -->
            </div><!-- .section-main -->

        </section>

    </main><!-- #main -->

<?php
get_footer();
