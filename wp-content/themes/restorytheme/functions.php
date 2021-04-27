<?php

function restorytheme_theme_support()
{
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    // Adds support for custom logo

}

add_action('after_setup_theme', 'restorytheme_theme_support');

function restorytheme_custom_logo_setup()
{
    $defaults = array(
        'height' => 389,
        'width' => 709,
        'flex-height' => true,
        'flex-width' => true
    );
    add_theme_support('custom-logo', $defaults);
}

add_action('after_setup_theme', 'restorytheme_custom_logo_setup');


function restorytheme_menus()
{
    $locations = array(
        'primary' => "Desktop Primary",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'restorytheme_menus');


function restorytheme_register_styles()
{
    $version = wp_get_theme()->get('version');
    wp_enqueue_style(
        'restorytheme-style',
        get_template_directory_uri() . "/style.css",
        array('restorytheme-bootstrap'),
        $version,
        'all'
    );
    wp_enqueue_style(
        'restorytheme-bootstrap',
        "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css",
        array(),
        '4.6.0',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'restorytheme_register_styles');


function restorytheme_register_scripts()
{
    wp_enqueue_script(
        'restorytheme-fontawesome',
        "https://kit.fontawesome.com/dc41ad4edb.js",
        array(),
        '5.15.3',
        'all'
    );
    wp_enqueue_script(
        'restorytheme-jquery',
        "https://code.jquery.com/jquery-3.6.0.slim.min.js",
        array(),
        '3.6.0',
        true
    );

    wp_enqueue_script(
        'restorytheme-popper',
        "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js",
        array(),
        '1.16.1',
        true
    );

    wp_enqueue_script(
        'restorytheme-bootstrap',
        "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js",
        array(),
        '4.6.0',
        true
    );

    wp_enqueue_script(
        'restorytheme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'restorytheme_register_scripts');
