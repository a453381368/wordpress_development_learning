<?php

function university_files(){
    //Load JS File
    wp_enqueue_script('main-university-js',
        get_theme_file_uri('/js/scripts-bundled.js'),
        NULL,
        /*This microtime() trick can avoid caching*/
        microtime(),
        true);
    //Load Fonts
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    //Load font-awesome
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    //Load CSS File
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}

//Hook Files
add_action('wp_enqueue_scripts','university_files');

function university_features(){
    //Enable Menu Function. 第一个参数在recall wp_nav_menu()函数时传入，第二个参数是显示在admin上的string
    // register_nav_menu('headerMenuLocation', 'Header Menu Location');

    // register_nav_menu('footerMenuOne', 'Footer Location One');
    // register_nav_menu('footerMenuTwo', 'Footer Location Two');
    //Add title
    add_theme_support('title-tag');
}

add_action('after_setup_theme','university_features');


