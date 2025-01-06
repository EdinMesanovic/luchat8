<?php
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/enqueue-scripts.php';

if (function_exists('acf_register_block_type')) {
    require_once get_template_directory() . '/inc/acf-blocks.php';
}

function rewrite_flush_fix() {
    fix_news_post_type(); 
    flush_rewrite_rules(); 
}
add_action('after_switch_theme', 'rewrite_flush_fix');

function get_youtube_embed_url($url) {
    parse_str(parse_url($url, PHP_URL_QUERY), $query);
    return isset($query['v']) ? 'https://www.youtube.com/embed/' . $query['v'] : '';
}


