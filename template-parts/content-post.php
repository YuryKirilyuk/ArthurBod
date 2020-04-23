<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arthur_Bod
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="category"><?php the_category(', '); ?></div>
    <h3 class="article-title"><?php the_title(); ?></h3>
    <div class="date"><?php the_date(); ?></div>

    <div class="featured-image">
        <?php if( has_post_thumbnail() ) { ?>
            <img src="<?php the_post_thumbnail_url(); ?> " alt="<?php the_title(); ?>">
        <?php } ?>
    </div>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->