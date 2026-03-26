<?php

/**
 *
 * @package Viral Pro
 */
function viral_pro_custom_post_types() {
    $labels = array(
        'name' => _x('Mega Menus', 'post type general name', 'viral-pro'),
        'singular_name' => _x('Mega Menu', 'post type singular name', 'viral-pro'),
        'menu_name' => _x('Mega Menus', 'admin menu', 'viral-pro'),
        'name_admin_bar' => _x('Mega Menu', 'add new on admin bar', 'viral-pro'),
        'add_new' => _x('Add New', 'Mega Menu', 'viral-pro'),
        'add_new_item' => __('Add New Mega Menu', 'viral-pro'),
        'new_item' => __('New Mega Menu', 'viral-pro'),
        'edit_item' => __('Edit Mega Menu', 'viral-pro'),
        'view_item' => __('View Mega Menu', 'viral-pro'),
        'all_items' => __('All Mega Menus', 'viral-pro'),
        'search_items' => __('Search Mega Menus', 'viral-pro'),
        'parent_item_colon' => __('Parent Mega Menus:', 'viral-pro'),
        'not_found' => __('No Mega Menu found.', 'viral-pro'),
        'not_found_in_trash' => __('No Mega Menu found in Trash.', 'viral-pro')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Show Mega Menu Items', 'viral-pro'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'ht-mega-menu'),
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-schedule',
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
        'show_in_nav_menus' => false
    );

    register_post_type('ht-megamenu', $args);
}

add_action('init', 'viral_pro_custom_post_types');
