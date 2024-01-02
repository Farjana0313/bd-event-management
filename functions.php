<?php

function bd_event_management_theme_supports(){
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag');
    register_nav_menus( [
        'main-menu' => 'Main Menu'
    ] );
}

add_action('after_setup_theme','bd_event_management_theme_supports');

//Calling Theme files
function bd_event_management_theme_files(){
    wp_enqueue_style('bd-event-management-theme', get_stylesheet_uri(  )
);
}
add_action( 'wp_enqueue_scripts','bd_event_management_theme_files');