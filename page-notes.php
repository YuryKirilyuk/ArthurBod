<?php
/*
  Template Name: Notes Page
*/


get_header(); ?>

    <main id="main" class="site-main page-notes">

        <section class="section-hero">

            <div class="section-main">
                <aside>

                    <nav class="custom-menu mobile">
                        <ul>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/about/">About Arthur</a>
                                <p>Arthur Bod’s music can be defined simply as</p>
                                <span>01</span>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/notes/">Notes</a>
                                <p>Arthur Bod’s music can be defined simply as</p>
                                <span>02</span>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/contact/">Contact</a>
                                <p>Arthur Bod’s music can be defined simply as</p>
                                <span>03</span>
                            </li>
                        </ul>
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
                                <h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
                                <div class="entry-content">
                                    <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                                </div>
                            </li>

                        <?php endwhile; wp_reset_query(); endif; ?>

                    </ul>

                </aside>

                <div class="page-content">

                    <nav class="custom-menu">
                        <ul>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/about/">About Arthur</a>
                                <p>Arthur Bod’s music can be defined simply as</p>
                                <span>01</span>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/notes/">Notes</a>
                                <p>Arthur Bod’s music can be defined simply as</p>
                                <span>02</span>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/contact/">Contact</a>
                                <p>Arthur Bod’s music can be defined simply as</p>
                                <span>03</span>
                            </li>
                        </ul>
                    </nav>

                    <div class="content">

                            <div class="entry-content-post">

                                <?php $loop = new WP_Query( array(  'post_type' => 'post',
                                                                    'posts_per_page' => '1',
                                                                    'orderby' => 'post_id',
                                                                    'order' => 'DESC' ) ); ?>

                                <?php if ($loop->have_posts()) : while( $loop->have_posts() ) : $loop->the_post(); ?>

                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                    <h3 class="article-title"><?php the_title(); ?></h3>

                                    <div class="featured-image">
                                        <?php if( has_post_thumbnail() ) { ?>
                                            <img src="<?php the_post_thumbnail_url(); ?> " alt="<?php the_title(); ?>">
                                        <?php } ?>
                                    </div>

                                    <div class="entry-content">
                                        <?php the_content(); ?>
                                    </div>

                                </article><!-- #post-<?php the_ID(); ?> -->

                                <?php endwhile; wp_reset_query(); endif; ?>

                            </div><!-- .entry-content-page -->
                    </div><!-- //.content -->

                </div><!-- //.page-content -->

                <ul class="articles-list mobile">
                    <?php $loop = new WP_Query( array(  'post_type' => 'post',
                        'posts_per_page' => '5',
                        'orderby' => 'post_id',
                        'order' => 'DESC' ) ); ?>

                    <?php if ($loop->have_posts()) : while( $loop->have_posts() ) : $loop->the_post(); ?>

                        <li>
                            <h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <div class="entry-content">
                                <a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a>
                            </div>
                        </li>

                    <?php endwhile; wp_reset_query(); endif; ?>

                </ul>


            </div><!-- .section-main -->

        </section>

    </main><!-- #main -->

<?php
get_footer();
