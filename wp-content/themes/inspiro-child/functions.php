<?php

function portfolio_enqueue_styles() {
    wp_enqueue_style(
        'inspiro-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'inspiro-child-style',
        get_stylesheet_uri(),
        array('inspiro-parent-style')
    );
}

add_action('wp_enqueue_scripts', 'portfolio_enqueue_styles');