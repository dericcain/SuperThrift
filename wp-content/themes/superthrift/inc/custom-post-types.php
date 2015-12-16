<?php

add_action( 'init', 'create_store_post_type' );

function create_store_post_type() {

    register_post_type( 'store',
        array(
          'labels' => array(
            'name' => __( 'Stores', 'superthrift' ),
            'singular_name' => __( 'Store', 'superthrift' )
          ),
          'public' => true,
          'has_archive' => false,
          'exclude_from_search' => false,
          'publicly_queryable' => true,
          'supports' => array(
            'editor', 'title', 'thumbnail'
            
          ),
          'menu_icon' => 'dashicons-cart',
        )
    );
    
}

add_action( 'init', 'create_dropbox_post_type' );

function create_dropbox_post_type() {

    register_post_type( 'dropbox',
        array(
          'labels' => array(
            'name' => __( 'Dropboxes', 'superthrift' ),
            'singular_name' => __( 'Dropbox', 'superthrift' )
          ),
          'public' => true,
          'has_archive' => false,
          'exclude_from_search' => true,
          'publicly_queryable' => false,
          'supports' => array(
            'title', 'thumbnail',
          ),
          'menu_icon' => 'dashicons-location-alt',
        )
    );
    
}


add_action( 'init', 'create_testimonial_post_type' );

function create_testimonial_post_type() {
    
    register_post_type( 'testimonial',
        array(
          'labels' => array(
            'name' => __( 'Testimonies', 'superthrift' ),
            'singular_name' => __( 'Testimonial', 'superthrift' )
          ),
          'public' => true,
          'has_archive' => false,
          'menu_icon' => 'dashicons-format-status',
          'exclude_from_search' => false,
          'publicly_queryable' => true,
          'supports' => array(
              'thumbnail', 'editor', 'title',
          ),
        )
    );    
}
