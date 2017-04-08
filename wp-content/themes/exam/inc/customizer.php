<?php
/**
 * Exam Theme Customizer
 *
 * @package Exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function exam_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /* LOGO
    =========================================================*/

    $wp_customize->add_section( 'logo' , array(
        'title'      => __( 'Logo'),
        'priority'   => 30,
    ) );
    $wp_customize->add_setting( 'logo-left-side' , array(
        'default'   => 'Logo left side',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo-left-side', array(
        'label'      => __( 'Logo left side' ),
        'section'    => 'logo',
        'settings'   => 'logo-left-side',
    ) ) );
    $wp_customize->add_setting( 'logo-right-side' , array(
        'default'   => 'logo right side',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'logo-right-side', array(
        'label'      => __( 'Logo right side'),
        'section'    => 'logo',
        'settings'   => 'logo-right-side',
    ) ) );

    /* FOOTER SECTION
    =========================================================*/

	$wp_customize->add_section( 'footer-settings', array(
        'title' => 'Footer settings',
        'priority' => 30
    ) );

	$wp_customize->add_setting( 'footer-rights', array(
        'transport' => 'refresh'
    ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer-rights', array(
        'label' => __( 'Footer rights' ),
        'section' => 'footer-settings'
    ) ) );

    /* HOME SECTION
    =========================================================*/

    $wp_customize->add_section( 'home-section', array(
        'title' => 'Home section',
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'home-section-image', array(
        'label' => __( 'Home section image' ),
        'section' => 'home-section'
    ) );

    $wp_customize->add_setting( 'home-section-title', array(
        'label' => __( 'Home section title' ),
        'section' => 'home-section'
    ) );

    $wp_customize->add_setting( 'home-section-subtitle', array(
        'label' => __( 'Home section subtitle' ),
        'section' => 'home-section'
    ) );

    $wp_customize->add_setting( 'home-section-description', array(
        'label' => __( 'Home section description' ),
        'section' => 'home-section'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home-section-title', array(
        'label' => __( 'Home section title' ),
        'section' => 'home-section',
        'settings' => 'home-section-title'
    ) ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home-section-subtitle', array(
        'label' => __( 'Home section subtitle' ),
        'section' => 'home-section',
        'settings' => 'home-section-subtitle',
        'type' => 'textarea'
    ) ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'home-section-description', array(
        'label' => __( 'Home section description' ),
        'section' => 'home-section',
        'settings' => 'home-section-description',
        'type' => 'textarea'
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'home-section-image', array(
        'label'         => __( 'Home section image' ),
        'section'       => 'home-section',
        'settings'      => 'home-section-image'
    ) ) );

    /* WELCOME SECTION
    =========================================================*/

    $wp_customize->add_section( 'welcome-section', array(
        'title' => 'Welcome section',
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'welcome-section-title', array(
        'label' => __( 'Welcome section title' ),
        'section' => 'welcome-section'
    ) );

    $wp_customize->add_setting( 'welcome-section-description', array(
        'label' => __( 'Welcome section description' ),
        'section' => 'welcome-section'
    ) );

    $wp_customize->add_setting( 'welcome-section-image', array(
        'label' => __( 'Welcome section image' ),
        'section' => 'welcome-section'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'welcome-section-title', array(
        'label' => __( 'Welcome section title' ),
        'section' => 'welcome-section',
        'settings' => 'welcome-section-title'
    ) ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'welcome-section-description', array(
        'label' => __( 'Home section description' ),
        'section' => 'welcome-section',
        'settings' => 'welcome-section-description',
        'type' => 'textarea'
    ) ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'welcome-section-image', array(
        'label'         => __( 'Welcome section image' ),
        'section'       => 'welcome-section',
        'settings'      => 'welcome-section-image'
    ) ) );

    /* LATEST WORKS SECTION
    =========================================================*/

    $wp_customize->add_section( 'works-section', array(
        'title' => 'Latest works section',
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'works-section-title', array(
        'label' => __( 'Latest works section title' ),
        'section' => 'works-section'
    ) );

    $wp_customize->add_setting( 'works-section-description', array(
        'label' => __( 'Latest works section description' ),
        'section' => 'welcome-section'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'works-section-title', array(
        'label' => __( 'Latest works section title' ),
        'section' => 'works-section',
        'settings' => 'works-section-title'
    ) ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'works-section-description', array(
        'label' => __( 'Latest works section description' ),
        'section' => 'works-section',
        'settings' => 'works-section-description',
        'type' => 'textarea'
    ) ) );

    /* LATEST WORKS SECTION
    =========================================================*/

    $wp_customize->add_section( 'clients-section', array(
        'title' => 'Clients section',
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'clients-section-title', array(
        'label' => __( 'Clients section title' ),
        'section' => 'clients-section'
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'clients-section-title', array(
        'label' => __( 'Clients section title' ),
        'section' => 'clients-section',
        'settings' => 'clients-section-title'
    ) ) );

}
add_action( 'customize_register', 'exam_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function exam_customize_preview_js() {
	wp_enqueue_script( 'exam_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'exam_customize_preview_js' );
