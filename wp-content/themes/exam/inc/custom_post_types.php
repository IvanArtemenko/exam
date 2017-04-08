<?php

function my_post_types()
{
    register_post_type( 'offers', array(
        'labels' => array(
            'name' => __(' Offers '),
            'singular_name' => __(' Offer '),
            'add_new' => 'Add new offer'
        ),

        'public' => true,
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'taxonomies' => array( 'category' ),
        'publicly_queryable'  => false,
        'exclude_from_search' => true
    ) );

    register_post_type( 'works', array(
        'labels' => array(
            'name' => __(' Works '),
            'singular_name' => __(' Works '),
            'add_new' => 'Add new work'
        ),

        'public' => true,
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'taxonomies' => array( 'category' ),
        'publicly_queryable'  => false,
        'exclude_from_search' => true
    ) );

    register_post_type( 'clients', array(
        'labels' => array(
            'name' => __( 'Clients' ),
            'singular_name' => __( 'client' ),
            'add_new' => 'Add new client'
        ),
        'public' => true,
        'supports' => array(
            'thumbnail'
        ),
        'publicly_queryable'  => false,
        'exclude_from_search' => true
    ));
}

add_action( 'init', 'my_post_types' );