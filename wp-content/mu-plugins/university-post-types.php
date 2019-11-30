<?php
//Create New Post Type
function university_post_types(){
    //Campus Post Type
    register_post_type('campus', array(
        //Enable options
        'supports' => array('title','editor','excerpt'),
        //Change slug
        'rewrite' => array(
            'slug' => 'campuses'
        ),
        //Enable archive
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Campuses',
            'add_new_item' => 'Add New Campus',
            'edit_item' => 'Edit Campus',
            'all_items' => 'All Campuses',
            'singular_name' => 'Campus'
        ),
        'menu_icon' => 'dashicons-location-alt'
    ));


    //Event Post Type
    register_post_type('event', array(
        //Enable options
        'supports' => array('title','editor','excerpt'),
        //Change slug
        'rewrite' => array(
            'slug' => 'events'
        ),
        //Enable archive
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));

    //Program Post Type
    register_post_type('program', array(
        //Enable options
        'supports' => array('title','editor'),
        //Change slug
        'rewrite' => array(
            'slug' => 'programs'
        ),
        //Enable archive
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'menu_icon' => 'dashicons-awards'
    ));

    //Professor Post Type
    register_post_type('professor', array(
        //Enable options
        'supports' => array('title','editor','thumbnail'),
        //Enable archive
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}

add_action('init','university_post_types');