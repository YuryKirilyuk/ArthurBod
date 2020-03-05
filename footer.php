<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arthur_Bod
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
        <div class="container">
            <div class="footer-info">
                <p>©2020 Arthur Bod</p>
                <p>All Rights Reserved</p>
            </div><!-- .footer-info -->
            <div class="socials">
                <p>Follow me</p>
                <a href="<?php the_field('instagram', 'option'); ?>" class="in" target="_blank"></a>
                <a href="<?php the_field('facebook', 'option'); ?>" class="fb" target="_blank"></a>
            </div>
        </div>
	</footer><!-- .site-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js"></script>

</body>
</html>
