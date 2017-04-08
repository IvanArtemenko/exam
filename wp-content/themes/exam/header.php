<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Exam
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="row">
                <div class="site-logo pull-left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        <span class="logo-left-side"><?php echo get_theme_mod('logo-left-side'); ?></span><span class="logo-right-side"><?php echo get_theme_mod('logo-right-side'); ?></span>
                    </a>
                </div>

                <div class="site-navigation pull-right">
                    <?php wp_nav_menu( array('menu' => 'header-nav') ); ?>
                </div>
            </div>
        </div>
	</header><!-- #masthead -->

    <?php if ( !is_front_page() ) : ?>
        <section class="page-banner">
            <div class="banner-image">
                <?php the_header_image_tag(); ?>
            </div>
            <h1 class="banner-title"><?php single_post_title(); ?></h1>
        </section>
    <?php endif; ?>
	<div id="content" class="site-content">
