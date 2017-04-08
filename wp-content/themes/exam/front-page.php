<?php get_header(); ?>

<div id="primary">
    <main id="main" class="site-main" role="main">
        <section class="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home-section-image">
                            <img src="<?php echo get_theme_mod('home-section-image'); ?>" alt="banner">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="home-section-about">
                            <h1 class="home-section-title"><?php echo get_theme_mod('home-section-title'); ?></h1>
                            <h3 class="home-section-subtitle"><?php echo get_theme_mod('home-section-subtitle'); ?></h3>
                            <p class="home-section-description"><?php echo  get_theme_mod('home-section-description'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="anchor-button"><i class="fa fa-chevron-down" aria-hidden="true"></i></button>
                </div>
            </div>
        </section>

        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-section-image">
                            <img src="<?php echo get_theme_mod('welcome-section-image'); ?>" alt="banner">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="welcome-section-text">
                            <h2 class="welcome-section-title"><?php echo get_theme_mod('welcome-section-title'); ?></h2>
                            <p class="welcome-section-description"><?php echo get_theme_mod('welcome-section-description'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="offers-section">
            <div class="container">
                <div class="offers-section-text">
                    <h2 class="offers-section-title">We are Offering....</h2>
                    <p class="offers-section-description">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s,
                    </p>
                </div>

                <div class="row">
                    <?php
                        $customTypeQuery = array(
                            'post_type' => 'offers',
                            'order_by' => 'rand'
                        );

                        $offers = new WP_Query($customTypeQuery);

                        if ($offers->have_posts()) : ?>

                        <?php while($offers->have_posts()) : $offers->the_post(); ?>

                            <div class="col-md-4">
                                <div class="offer-item">
                                    <div class="offer-image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>

                                    <div class="offer-body">
                                        <h2><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="works-section">
            <div class="container">
                <div class="works-section-text">
                    <h2 class="works-section-title"><?php echo get_theme_mod('works-section-title'); ?></h2>
                    <p class="works-section-description"><?php echo get_theme_mod('works-section-description'); ?></p>
                </div>

                <div class="row">

                </div>
            </div>
        </section>

        <section class="clients-section">

            <div class="client-section-text">
                <h2><?php echo get_theme_mod('clients-section-title'); ?></h2>
            </div>

            <?php
            $query = array(
                'post_type' => 'clients',
                'order_by' => 'rand'
            );

            $clients = new WP_Query($query);

            if ($clients->have_posts()) : ?>

                <div class="clients-slider flexslider">
                    <ul class="slides">
                        <?php while($clients->have_posts()) : $clients->the_post(); ?>
                            <li class="client-item">
                                <?php the_post_thumbnail(); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>

            <?php endif; ?>

        </section>
    </main>
</div>

<?php get_footer(); ?>