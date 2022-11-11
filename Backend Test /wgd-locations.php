<?php

/*
Plugin Name: WGD Locations
Description: Location custom post type with taxonomy
Author: Steve Honeyman
Version: 1.0
*/

/* Location Post Type
----------------------------------------------------------------------------- */
function create_wgd_location() {
  // define & set labels
  $labels = array(
    'name' => 'Location',
    'singular_name' => 'Location',
    'add_new' => 'Add New Location',
    'add_new_item' => 'Add New Location',
    'edit_item' => 'Edit Location',
    'new_item' => 'New Location',
    'all_items' => 'All Locations',
    'view_item' => 'View Location',
    'menu_name' => 'Location'
  );

  // register post type
  register_post_type( 'wgd_location',
    array(
    'labels' => $labels,
    'hierarchical' => false,
    'has_archive' => true,
    'public' => true,
    'supports' => array( 'title', 'editor', 'excerpt', 'slug', 'thumbnail', 'category'),
    'taxonomies' => array( 'post_tag', 'category' ),
    'exclude_from_search' => false,
    'rewrite' => __return_true(),
    'capability_type' => 'post'
    )
  );
}
add_action( 'init', 'create_wgd_location' );


/* Location Taxonomy
----------------------------------------------------------------------------- */
function create_location_taxonomy() {
  // define & set labels
  $labels = array(
      'name'  =>  'Location Taxonomy',
      'singular_name' => 'location_taxonomy',
      'all_items' => 'Location Taxonomy',
      'edit_item' => 'Location Taxonomy',
      'update_item' => 'Update Location Taxonomy',
      'add_new_item' => 'Add New Location Taxonomy Item',
      'new_item_name' => 'New Location Taxonomy Name',
      'menu_name' => 'Location Taxonomy',
      'view_item' => 'View Location Taxonomy'
  ); 

  // register taxonomy
  register_taxonomy( 'location_taxonomy', 'wgd_location',
      array(
      'labels' => $labels,
      'hierarchical' => true,
      'query_var' => true,
      'rewrite' => true,
			'taxonomies' => array( 'post_tag', 'category' ),
      )
  );
}
add_action( 'init' , 'create_location_taxonomy');
