<?php

add_action('init', 'oren_slider_post_type', 0 );


function oren_slider_post_type() {
      // Labels for the Post Type
    $labels = array(
      'name'                => _x( 'Sliders', 'Post Type General Name', 'oren' ),
      'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'oren' ),
      'menu_name'           => __( 'Sliders', 'oren' ),
      'parent_item_colon'   => __( 'Parent Slider', 'oren' ),
      'all_items'           => __( 'All Sliders', 'oren' ),
      'view_item'           => __( 'View Slider', 'oren' ),
      'add_new_item'        => __( 'Add New Slider', 'oren' ),
      'add_new'             => __( 'Add New Slider', 'oren' ),
      'edit_item'           => __( 'Edit Slider', 'oren' ),
      'update_item'         => __( 'Update Slider', 'oren' ),
      'search_items'        => __( 'Search Slider', 'oren' ),
      'not_found'           => __( 'No sliders found', 'oren' ),
      'not_found_in_trash'  => __( 'Not found in trash', 'oren' ),
    );
    // Another Customizations
    $args = array(
        'label'   => __('Sliders','oren' ),
        'description' => __('Sliders for Oren', 'oren'),
        'labels'  => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-video-alt',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'capability_type' => 'page',
    );
    // register the post Type
    register_post_type( 'sliders', $args);
}

 ?>
