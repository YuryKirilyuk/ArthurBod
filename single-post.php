<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Arthur_Bod
 */

get_header();
?>

    <main id="main" class="site-main page-notes">

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

                    <ul class="articles-list">
                        <?php $loop = new WP_Query( array(  'post_type' => 'post',
                            'posts_per_page' => '5',
                            'orderby' => 'post_id',
                            'order' => 'DESC' ) ); ?>

                        <?php if ($loop->have_posts()) : while( $loop->have_posts() ) : $loop->the_post(); ?>

                            <li>
                                <div class="category"><?php the_category(', '); ?></div>
                                <h5><?php the_title(); ?></h5>
                                <div class="date"><?php the_date(); ?></div>
                                <div class="entry-content">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                                </div>
                            </li>

                        <?php endwhile; wp_reset_query(); endif; ?>

                    </ul>

                </aside>

                <div class="page-content">

                    <nav class="custom-menu">

                        <?php echo do_shortcode( '[customMenu]' ); ?>

                    </nav>

                    <div class="content">

                        <div class="entry-content-post">

                            <?php
                            while ( have_posts() ) :
                                the_post();

                                get_template_part( 'template-parts/content', get_post_type() );

                                //the_post_navigation();

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    //comments_template();
                                endif;

                            endwhile; // End of the loop.
                            ?>

                        </div><!-- .entry-content-page -->
                    </div><!-- //.content -->

                </div><!-- //.page-content -->
            </div><!-- .section-main -->

        </section>

    </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
