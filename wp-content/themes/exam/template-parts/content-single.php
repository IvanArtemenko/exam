<div class="col-md-12">
    <article class="post-single" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post-single-thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>

        <div class="post-single-body">
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <div class="entry-text">
                <?php the_content(); ?>
            </div>
        </div>
    </article><!-- #post-## -->
</div>