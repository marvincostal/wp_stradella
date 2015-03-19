<?php
// Homepage Info
function info() {

  $labels = array(
    'name'                => _x( 'Infos', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Info', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Homepage Info', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Info:', 'text_domain' ),
    'all_items'           => __( 'All Infos', 'text_domain' ),
    'view_item'           => __( 'View Info', 'text_domain' ),
    'add_new_item'        => __( 'Add New Info', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'edit_item'           => __( 'Edit Info', 'text_domain' ),
    'update_item'         => __( 'Update Info', 'text_domain' ),
    'search_items'        => __( 'Search Info', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'info', 'text_domain' ),
    'description'         => __( 'Homepage Information', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail', ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-info',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'info', $args );

}

// Hook into the 'init' action
add_action( 'init', 'info', 0 );


// Homepage Slider
function homeslider() {

  $labels = array(
    'name'                => _x( 'Slides', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Home Slider', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Slide:', 'text_domain' ),
    'all_items'           => __( 'All Slides', 'text_domain' ),
    'view_item'           => __( 'View Slide', 'text_domain' ),
    'add_new_item'        => __( 'Add New Slide', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'edit_item'           => __( 'Edit Slide', 'text_domain' ),
    'update_item'         => __( 'Update Slide', 'text_domain' ),
    'search_items'        => __( 'Search Slide', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'homeslider', 'text_domain' ),
    'description'         => __( 'Homeslider for Stradella', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail', ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-images-alt2',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'homeslider', $args );

}

// Hook into the 'init' action
add_action( 'init', 'homeslider', 0 );

// Rooms
function rooms() {

  $labels = array(
    'name'                => _x( 'Rooms', 'Post Type General Name', 'text_domain' ),
    'singular_name'       => _x( 'Room', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'           => __( 'Rooms', 'text_domain' ),
    'parent_item_colon'   => __( 'Parent Room:', 'text_domain' ),
    'all_items'           => __( 'All Rooms', 'text_domain' ),
    'view_item'           => __( 'View Room', 'text_domain' ),
    'add_new_item'        => __( 'Add New Room', 'text_domain' ),
    'add_new'             => __( 'Add New', 'text_domain' ),
    'edit_item'           => __( 'Edit Room', 'text_domain' ),
    'update_item'         => __( 'Update Room', 'text_domain' ),
    'search_items'        => __( 'Search Room', 'text_domain' ),
    'not_found'           => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
  );
  $args = array(
    'label'               => __( 'rooms', 'text_domain' ),
    'description'         => __( 'Stradella Rooms', 'text_domain' ),
    'labels'              => $labels,
    'supports'            => array( 'title', 'editor', 'thumbnail', ),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 20,
    'menu_icon'           => 'dashicons-admin-home',
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'rooms', $args );

}

// Hook into the 'init' action
add_action( 'init', 'rooms', 0 );


// Meeting
function meetings() {

    $labels = array(
        'name'                => _x( 'Meetings', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Meeting', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Meeting', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Meeting:', 'text_domain' ),
        'all_items'           => __( 'All Meetings', 'text_domain' ),
        'view_item'           => __( 'View Meeting', 'text_domain' ),
        'add_new_item'        => __( 'Add New Meeting', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Meeting', 'text_domain' ),
        'update_item'         => __( 'Update Meeting', 'text_domain' ),
        'search_items'        => __( 'Search Meeting', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'meeting', 'text_domain' ),
        'description'         => __( 'Meeting and Events for Stradella', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-groups',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'meetings', $args );

}

// Hook into the 'init' action
add_action( 'init', 'meetings', 0 );

// Promos
function promos() {

    $labels = array(
        'name'                => _x( 'Promos', 'Post Type General Name', 'text_domain' ),
        'singular_name'       => _x( 'Promo', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'           => __( 'Promos', 'text_domain' ),
        'parent_item_colon'   => __( 'Parent Promo:', 'text_domain' ),
        'all_items'           => __( 'All Promos', 'text_domain' ),
        'view_item'           => __( 'View Promo', 'text_domain' ),
        'add_new_item'        => __( 'Add New Promo', 'text_domain' ),
        'add_new'             => __( 'Add New', 'text_domain' ),
        'edit_item'           => __( 'Edit Promo', 'text_domain' ),
        'update_item'         => __( 'Update Promo', 'text_domain' ),
        'search_items'        => __( 'Search Promo', 'text_domain' ),
        'not_found'           => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
        'label'               => __( 'prmos', 'text_domain' ),
        'description'         => __( 'Promo Page for Stradella', 'text_domain' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'thumbnail', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-megaphone',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'promos', $args );

}

// Hook into the 'init' action
add_action( 'init', 'promos', 0 );