<?php
/*
  Template Name: Contact Page
*/


get_header(); ?>

    <main id="main" class="site-main page-contact">

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
                                <p>A little music blog and song liner-notes</p>
                                <span>02</span>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/contact/">Contact</a>
                                <p>Just in case you wanna talk to me</p>
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

                    <div class="image">
                        <img alt="" src="<?php bloginfo('stylesheet_directory');?>/assets/img/grif2.png" />
                    </div>
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
                                <p>A little music blog and song liner-notes</p>
                                <span>02</span>
                            </li>
                            <li>
                                <a href="<?php echo get_site_url(); ?>/contact/">Contact</a>
                                <p>Just in case you wanna talk to me</p>
                                <span>03</span>
                            </li>
                        </ul>
                    </nav>

                    <div class="content">
                        <h3>Contact</h3>

                        <div class="contact-form">
                            <p>For any music-related enquries,  please complete the form below.</p>
                            <?php echo do_shortcode( '[contact-form-7 id="51" title="Contact"]' ); ?>
                        </div>

                        <div class="socials">
                            <p>Or write me on social media</p>
                            <a href="<?php the_field('instagram', 'option'); ?>" class="in" target="_blank"></a>
                            <a href="<?php the_field('facebook', 'option'); ?>" class="fb" target="_blank"></a>
                        </div>

                    </div>

                </div><!-- //.page-content -->
            </div><!-- .section-main -->

        </section>


    </main><!-- #main -->

<?php
get_footer();
