<?php
add_theme_support( 'post-thumbnails' );
//Register Menu
    function register_my_menus() {
        register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
        )
        );
    }
    add_action( 'init', 'register_my_menus' );
//Widgets
	add_action( 'widgets_init', 'jkg_widgets_init' );
    function jkg_widgets_init() {
        register_sidebar(array(
            'name' => 'Footer Menu',
            'id'   => 'footer-menu',
            'before_widget' => '',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
            'after_widget'  => ''
        ));
        register_sidebar(array(
            'name' => 'Footer Newsletter Signup Form',
            'id'   => 'footer-newsletter-signup-form',
            'before_widget' => '',
            'before_title'  => '<h4 class="widgettitle">',
            'after_title'   => '</h4>',
            'after_widget'  => ''
        ));
        register_sidebar(array(
			'name' => 'Post / Page Sidebar',
			'id'   => 'post_page_sidebar',
			'before_widget' => '<div class="postWidget %2$s">',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '<i class="fas fa-chevron-down"></i><i class="fas fa-chevron-up"></i></h3>',
			'after_widget'  => '</div>'
		));
    }
    // Register Custom Post Type Services
    function custom_ourSolutions() {

        $labels = array(
            'name'                  => _x( 'Our Solutions', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Solution', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Our Solutions', 'text_domain' ),
            'name_admin_bar'        => __( 'Solution', 'text_domain' ),
            'archives'              => __( 'Solution Archives', 'text_domain' ),
            'attributes'            => __( 'Solution Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Solution:', 'text_domain' ),
            'all_items'             => __( 'All Solutions', 'text_domain' ),
            'add_new_item'          => __( 'Add New Solution', 'text_domain' ),
            'add_new'               => __( 'Add New Solution', 'text_domain' ),
            'new_item'              => __( 'New Solution', 'text_domain' ),
            'edit_item'             => __( 'Edit Solution', 'text_domain' ),
            'update_item'           => __( 'Update Solution', 'text_domain' ),
            'view_item'             => __( 'View Solution', 'text_domain' ),
            'view_items'            => __( 'View Solutions', 'text_domain' ),
            'search_items'          => __( 'Search Solution', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Solutions list', 'text_domain' ),
            'items_list_navigation' => __( 'Solutions list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter solutions list', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Service', 'text_domain' ),
            'description'           => __( 'Listing all services', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-clipboard',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
        );
        register_post_type( 'our-solutions', $args );

    }
    add_action( 'init', 'custom_ourSolutions', 0 );

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'robindevitt_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function robindevitt_custom_taxonomy() {
    $labels = array(
        'name' => _x( 'Categories', 'taxonomy general name' ),
        'singular_name' => _x( 'Category', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Categories' ),
        'all_items' => __( 'All Categories' ),
        'parent_item' => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item' => __( 'Edit Category' ), 
        'update_item' => __( 'Update Category' ),
        'add_new_item' => __( 'Add New Category' ),
        'new_item_name' => __( 'New Category Name' ),
        'menu_name' => __( 'Categories' ),
    ); 	
    
    register_taxonomy('our-sol-categories',array('our-solutions'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'our-sol-categories' ),
    ));
}