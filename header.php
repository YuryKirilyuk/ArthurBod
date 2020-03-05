<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arthur_Bod
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'arthur-bod' ); ?></a>

	<header id="masthead" class="site-header">

        <button class="btn-toggle">
            <span class="navigation-icon"></span>
        </button>

        <div class="cta"><p>Listen to my music</p></div>

        <div class="menu-container">

            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">AB</a>
            </div>

            <div class="track-list">
                <ul>

                <?php
                if( have_rows('song_list', 'option') ):
                    while ( have_rows('song_list', 'option') ) : the_row(); ?>
                        <li><?php echo the_sub_field('embed_code'); ?></li>
                <?php endwhile; endif; ?>

                </ul>

            </div><!-- .track-list -->

            <div class="contact">
                <p>+ Send me updates on<br>
                    “Water From The Moon”</p>
                <?php echo do_shortcode( '[contact-form-7 id="12" title="Subscribe" html_class="subscribe"]' ); ?>
            </div>

        </div><!-- .menu-container -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
