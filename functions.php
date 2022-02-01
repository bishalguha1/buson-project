<?php

if ( ! defined( '_BUSON_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_BUSON_VERSION', '1.0.0' );
}

// Theme Bootstrapping
function buson_bootstrapping(){
    load_theme_textdomain('buson');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');


}
add_action('after_setup_theme' , 'buson_bootstrapping');

// Sidebar register
function buson_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Category Sidebar', 'buson' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'This sidebar is for category widget', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Recent Post Sidebar', 'buson' ),
        'id'            => 'sidebar-recent-post',
        'description'   => __( 'This sidebar is for recent post widget', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Search Sidebar', 'buson' ),
        'id'            => 'sidebar-search',
        'description'   => __( 'This sidebar is for search widget', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Tag Sidebar', 'buson' ),
        'id'            => 'sidebar-tag',
        'description'   => __( 'This sidebar is for taglist widget', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Insta Sidebar', 'buson' ),
        'id'            => 'sidebar-insta',
        'description'   => __( 'This sidebar is for instagram widget', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Newsletter Sidebar', 'buson' ),
        'id'            => 'sidebar-news',
        'description'   => __( 'This sidebar is for newsletter widget', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'buson' ),
        'id'            => 'footer-2',
        'description'   => __( 'This sidebar is for second widget of footer', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );    
    
    register_sidebar( array(
        'name'          => __( 'Footer 3', 'buson' ),
        'id'            => 'footer-3',
        'description'   => __( 'This sidebar is for third widget of footer', 'buson' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'buson_sidebar' );

// Register Nav Menu

register_nav_menus([
    'Primary' => __('Primary Menu' , 'buson'),
    'Footer' => __('Footer Menu' , 'buson')
]);

// Custom Logo
function buson_custom_logo() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action('after_setup_theme','buson_custom_logo');


// Theme assets
function buson_assets(){
    wp_enqueue_style('theme-css' , get_stylesheet_uri());
    wp_enqueue_style( 'boostrap' , get_theme_file_uri('assets/css/bootstrap.min.css') );
    wp_enqueue_style( 'owl-css' , get_theme_file_uri('assets/css/owl.carousel.min.css') );
    wp_enqueue_style( 'slicknav-css' , get_theme_file_uri('assets/css/slicknav.css') );
    wp_enqueue_style( 'font-awesome' , get_theme_file_uri('assets/css/fontawesome-all.min.css') );
    wp_enqueue_style( 'slick-css' , get_theme_file_uri('assets/css/slick.css') );
    wp_enqueue_style( 'main-css' , get_theme_file_uri('assets/css/style.css') );
    wp_enqueue_style('dashicons');

    wp_enqueue_script( 'popper-js', get_theme_file_uri('/assets/js/popper.min.js') , array('jquery'), _BUSON_VERSION , true );
    wp_enqueue_script( 'bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js') , array('jquery'), _BUSON_VERSION , true );
    wp_enqueue_script( 'slicknav-js', get_theme_file_uri('/assets/js/jquery.slicknav.min.js') , array('jquery'), _BUSON_VERSION , true );
    wp_enqueue_script( 'owl-js', get_theme_file_uri('/assets/js/owl.carousel.min.js') , array('jquery'), _BUSON_VERSION , true );
    wp_enqueue_script( 'slick-js', get_theme_file_uri('/assets/js/slick.min.js') , array('jquery'), _BUSON_VERSION , true );
    wp_enqueue_script( 'sticky-js', get_theme_file_uri('/assets/js/jquery.sticky.js') , array('jquery'), _BUSON_VERSION , true );
    wp_enqueue_script( 'main-js', get_theme_file_uri('/assets/js/main.js') , array('jquery'), _BUSON_VERSION , true );
}
add_action('wp_enqueue_scripts' , 'buson_assets');


// Custom Post Type Add
function buson_slider_cpt() {
    $labels = array(
        'name'                  => _x( 'Sliders', 'Post type general name', 'Slider' ),
        'singular_name'         => _x( 'Slider', 'Post type singular name', 'Slider' ),
        'menu_name'             => _x( 'Sliders', 'Admin Menu text', 'Slider' ),
        'name_admin_bar'        => _x( 'Slider', 'Add New on Toolbar', 'Slider' ),
        'add_new'               => __( 'Add New', 'Slider' ),
        'add_new_item'          => __( 'Add New Slider', 'Slider' ),
        'new_item'              => __( 'New Slider', 'Slider' ),
        'edit_item'             => __( 'Edit Slider', 'Slider' ),
        'view_item'             => __( 'View Slider', 'Slider' ),
        'all_items'             => __( 'All Sliders', 'Slider' ),
        'search_items'          => __( 'Search Sliders', 'Slider' ),
        'parent_item_colon'     => __( 'Parent Sliders:', 'Slider' ),
        'not_found'             => __( 'No Sliders found.', 'Slider' ),
        'not_found_in_trash'    => __( 'No Sliders found in Trash.', 'Slider' ),
        'featured_image'        => _x( 'Slider Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'Slider' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'Slider' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'Slider' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'Slider' ),
        'archives'              => _x( 'Slider archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'Slider' ),
        'insert_into_item'      => _x( 'Insert into Slider', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'Slider' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Slider', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'Slider' ),
        'filter_items_list'     => _x( 'Filter Sliders list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'Slider' ),
        'items_list_navigation' => _x( 'Sliders list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'Slider' ),
        'items_list'            => _x( 'Sliders list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'Slider' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Slider custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'Slider' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 20,
        'menu_icon' => 'dashicons-slides',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'Slider', $args );
}
add_action( 'init', 'buson_slider_cpt' );


// Services Post type
function buson_services_cpt() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post type general name', 'service' ),
        'singular_name'         => _x( 'Service', 'Post type singular name', 'service' ),
        'menu_name'             => _x( 'Services', 'Admin Menu text', 'service' ),
        'name_admin_bar'        => _x( 'service', 'Add New on Toolbar', 'service' ),
        'add_new'               => __( 'Add New', 'service' ),
        'add_new_item'          => __( 'Add New service', 'service' ),
        'new_item'              => __( 'New service', 'service' ),
        'edit_item'             => __( 'Edit service', 'service' ),
        'view_item'             => __( 'View service', 'service' ),
        'all_items'             => __( 'All Services', 'service' ),
        'search_items'          => __( 'Search Services', 'service' ),
        'parent_item_colon'     => __( 'Parent Services:', 'service' ),
        'not_found'             => __( 'No Services found.', 'service' ),
        'not_found_in_trash'    => __( 'No Services found in Trash.', 'service' ),
        'featured_image'        => _x( 'service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'service' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'service' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'service' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'service' ),
        'archives'              => _x( 'service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'service' ),
        'insert_into_item'      => _x( 'Insert into service', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'service' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'service' ),
        'filter_items_list'     => _x( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'service' ),
        'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'service' ),
        'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'service' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'service custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon' => 'dashicons-admin-generic',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array(  ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'service', $args );
}
add_action( 'init', 'buson_services_cpt' );


// Cases Post Type
function buson_cases_cpt() {
    $labels = array(
        'name'                  => _x( 'Cases', 'Post type general name', 'case' ),
        'singular_name'         => _x( 'Case', 'Post type singular name', 'case' ),
        'menu_name'             => _x( 'Cases', 'Admin Menu text', 'case' ),
        'name_admin_bar'        => _x( 'case', 'Add New on Toolbar', 'case' ),
        'add_new'               => __( 'Add New', 'case' ),
        'add_new_item'          => __( 'Add New case', 'case' ),
        'new_item'              => __( 'New case', 'case' ),
        'edit_item'             => __( 'Edit case', 'case' ),
        'view_item'             => __( 'View case', 'case' ),
        'all_items'             => __( 'All Cases', 'case' ),
        'search_items'          => __( 'Search Cases', 'case' ),
        'parent_item_colon'     => __( 'Parent Cases:', 'case' ),
        'not_found'             => __( 'No Cases found.', 'case' ),
        'not_found_in_trash'    => __( 'No Cases found in Trash.', 'case' ),
        'featured_image'        => _x( 'case Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'case' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'case' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'case' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'case' ),
        'archives'              => _x( 'case archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'case' ),
        'insert_into_item'      => _x( 'Insert into case', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'case' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this case', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'case' ),
        'filter_items_list'     => _x( 'Filter Cases list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'case' ),
        'items_list_navigation' => _x( 'Cases list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'case' ),
        'items_list'            => _x( 'Cases list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'case' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'case custom post type.',
        'public'             => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'case' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'case_category' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'case', $args );
}
add_action( 'init', 'buson_cases_cpt' );


// Team CPT
function buson_team_cpt() {
    $labels = array(
        'name'                  => _x( 'Teams', 'Post type general name', 'team' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'team' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'team' ),
        'name_admin_bar'        => _x( 'team', 'Add New on Toolbar', 'team' ),
        'add_new'               => __( 'Add New', 'team' ),
        'add_new_item'          => __( 'Add New team', 'team' ),
        'new_item'              => __( 'New team', 'team' ),
        'edit_item'             => __( 'Edit team', 'team' ),
        'view_item'             => __( 'View team', 'team' ),
        'all_items'             => __( 'All Teams', 'team' ),
        'search_items'          => __( 'Search Teams', 'team' ),
        'parent_item_colon'     => __( 'Parent Teams:', 'team' ),
        'not_found'             => __( 'No Teams found.', 'team' ),
        'not_found_in_trash'    => __( 'No Teams found in Trash.', 'team' ),
        'featured_image'        => _x( 'team Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'team' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'team' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'team' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'team' ),
        'archives'              => _x( 'team archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'team' ),
        'insert_into_item'      => _x( 'Insert into team', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'team' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this team', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'team' ),
        'filter_items_list'     => _x( 'Filter Teams list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'team' ),
        'items_list_navigation' => _x( 'Teams list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'team' ),
        'items_list'            => _x( 'Teams list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'team' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'team custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'team', $args );
}
add_action( 'init', 'buson_team_cpt' );

// Testimonials Custom Post Type
function buson_testimonials_cpt() {
    $labels = array(
        'name'                  => _x( 'Testimonials', 'Post type general name', 'testimonial' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'testimonial' ),
        'menu_name'             => _x( 'Testimonials', 'Admin Menu text', 'testimonial' ),
        'name_admin_bar'        => _x( 'testimonial', 'Add New on Toolbar', 'testimonial' ),
        'add_new'               => __( 'Add New', 'testimonial' ),
        'add_new_item'          => __( 'Add New testimonial', 'testimonial' ),
        'new_item'              => __( 'New testimonial', 'testimonial' ),
        'edit_item'             => __( 'Edit testimonial', 'testimonial' ),
        'view_item'             => __( 'View testimonial', 'testimonial' ),
        'all_items'             => __( 'All Testimonials', 'testimonial' ),
        'search_items'          => __( 'Search Testimonials', 'testimonial' ),
        'parent_item_colon'     => __( 'Parent Testimonials:', 'testimonial' ),
        'not_found'             => __( 'No Testimonials found.', 'testimonial' ),
        'not_found_in_trash'    => __( 'No Testimonials found in Trash.', 'testimonial' ),
        'featured_image'        => _x( 'testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'testimonial' ),
        'archives'              => _x( 'testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'testimonial' ),
        'insert_into_item'      => _x( 'Insert into testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'testimonial' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'testimonial' ),
        'filter_items_list'     => _x( 'Filter Testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'testimonial' ),
        'items_list_navigation' => _x( 'Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'testimonial' ),
        'items_list'            => _x( 'Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'testimonial' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'testimonial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'buson_testimonials_cpt' );


// Register taxonomies for "Slider" Post type
function buson_case_taxnomies(){
        // Add new taxonomy, make it hierarchical (like categories)
        $labels = array(
            'name'              => _x( 'Case Categories', 'taxonomy general name', 'buson' ),
            'singular_name'     => _x( 'Slider category', 'taxonomy singular name', 'buson' ),
            'search_items'      => __( 'Search Case Categories', 'buson' ),
            'all_items'         => __( 'All Case Categories', 'buson' ),
            'parent_item'       => __( 'Parent Case category', 'buson' ),
            'parent_item_colon' => __( 'Parent Case category:', 'buson' ),
            'edit_item'         => __( 'Edit Case category', 'buson' ),
            'update_item'       => __( 'Update Case category', 'buson' ),
            'add_new_item'      => __( 'Add New Case category', 'buson' ),
            'new_item_name'     => __( 'New Case category Name', 'buson' ),
            'menu_name'         => __( 'Case category', 'buson' ),
        );
     
        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'case_category' ),
        );
     
        register_taxonomy( 'Case category', array( 'case' ), $args );
     
        unset( $args );
        unset( $labels );
}
add_action('init', 'buson_case_taxnomies');


// CSS in head part
function buson_internal_css(){
    // if(is_page()):
        $slider_ft = get_the_post_thumbnail_url( null, 'full' );
    ?>
        <style>
            .slider-img{
                background-image: url(<?php echo esc_html($slider_ft); ?>) !important;
            }
            .slider-img{
                padding-top: 10px;
            }
        </style>
    <?php
    // endif;
}
add_action('wp_head' , 'buson_internal_css');


// ACF Theme Option Dynamic
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Option',
		'menu_title'	=> 'Theme Option',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Section',
		'menu_title'	=> 'About Section',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Destails',
		'menu_title'	=> 'Contact Destails',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'CTA Section',
		'menu_title'	=> 'CTA Section',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

    acf_add_options_sub_page(array(
		'page_title' 	=> 'Custom Post Data',
		'menu_title'	=> 'Custom Post Data',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


add_filter( 'get_comments_link', function( $link, $post_id )
{
    $hash = get_comments_number( $post_id ) ? '#mycomments' : '#myrespond';
    return get_permalink( $post_id ) . $hash;

}, 10, 2 );

/**
 * Custom comment template
 */
require get_template_directory() . '/inc/custom-comment-list.php';