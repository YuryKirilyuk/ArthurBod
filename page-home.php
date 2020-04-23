<?php
/*
  Template Name: Home Page
*/

$about    = get_field('about');
$info     = $about['info'];

$quote    = get_field('quote');

$coming_soon = get_field('coming_soon');
$song_title = $coming_soon['song_title'];
$song_link  = $coming_soon['song_link'];
$song_link_url = $song_link['url'];
$song_link_title = $song_link['title'];
$song_link_target = $song_link['target'] ? $song_link['target'] : '_self';




get_header(); ?>

    <main id="main" class="site-main page-home">

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

                    <p class="short-info"><?php echo $info; ?></p>

                    <div class="socials">
                        <a href="<?php the_field('instagram', 'option'); ?>" class="in" target="_blank"></a>
                        <a href="<?php the_field('facebook', 'option'); ?>" class="fb" target="_blank"></a>
                    </div>
                </aside>

                <div class="page-content">

                    <nav class="custom-menu">
                        <?php echo do_shortcode( '[customMenu]' ); ?>
                    </nav>

                </div><!-- //.page-content -->
            </div><!-- .section-main -->


            <div class="quotes">
                <div class="image">
                    <img alt="" src="<?php bloginfo('stylesheet_directory');?>/assets/img/grif.png" />
                </div>
                <div class="quote">
                    <blockquote><?php echo $quote; ?></blockquote>
                </div>
            </div><!-- .quotes -->

        </section>

        <section class="section-footer">
            <div class="contact">
                <p>Hey Arthur, I dig your stuff...<br />
                    Update me about new music!</p>
                <?php echo do_shortcode( '[contact-form-7 id="12" title="Subscribe" html_class="subscribe"]' ); ?>
            </div>
            <div class="newEP">
                <h3 class="title">“<?php echo $song_title; ?>”</h3>
                <a class="link" href="<?php echo esc_url( $song_link_url ); ?>" target="<?php echo esc_attr( $song_link_target ); ?>">
                    <?php echo esc_html( $song_link_title ); ?>
                </a>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();
