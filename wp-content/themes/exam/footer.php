<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exam
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="upper-footer">
            <div class="container">
                <div class="site-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        <span class="logo-left-side"><?php echo get_theme_mod('logo-left-side'); ?></span><span class="logo-right-side"><?php echo get_theme_mod('logo-right-side'); ?></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer">
            <p class="footer-rights">
                <?php echo get_theme_mod('footer-rights'); ?>
            </p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
