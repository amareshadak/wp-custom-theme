<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Enqueue scripts
function my_theme_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function estimate_reading_time($content) {
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Assuming an average reading speed of 200 words per minute
    return $reading_time . ' min read';
}


function mytheme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');

function mytheme_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'mytheme'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here.', 'mytheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');