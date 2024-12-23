<?php
function luchat8_register_hero_block()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name'              => 'hero_section',
            'title'             => __('Hero Section', 'luchat8'),
            'description'       => __('Hero section with video background and placeholder image.', 'luchat8'),
            'render_template'   => 'blocks/hero/hero.php',
            'category'          => 'formatting',
            'icon'              => 'video-alt3',
            'keywords'          => array('hero', 'video', 'background'),
            'mode'              => 'edit',
            'supports'          => array('align' => false),
        ));
    }
}
add_action('acf/init', 'luchat8_register_hero_block');
