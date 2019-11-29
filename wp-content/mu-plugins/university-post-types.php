<?php
//Create New Post Type
function university_post_types(){
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
}

add_action('init','university_post_types');