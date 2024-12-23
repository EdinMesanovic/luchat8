<?php
function luchat8_theme_assets()
{
    wp_enqueue_style('luchat8-init-style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_style('luchat8-style', get_template_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_template_directory() . '/assets/css/theme.css'));

    wp_enqueue_script('luchat8-theme-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'luchat8_theme_assets');
