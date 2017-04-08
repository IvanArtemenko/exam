<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Exam
 */

?>

<div class="col-md-6 col-sm-6 col-xs-12">
    <article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-thumbnail">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="post-permalink">
                <i class="fa fa-share" aria-hidden="true"></i>
            </a>
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="post-body">
            <header class="entry-header">
                <?php
                if ( is_single() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
            </header>

            <div class="entry-text">
                <?php the_excerpt(); ?>
            </div>

            <footer class="entry-footer">
                <p><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_time('d, m, Y'); ?></p>
            </footer>
        </div>
    </article><!-- #post-## -->
</div>