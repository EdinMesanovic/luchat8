<?php
require_once get_template_directory() . '/inc/theme-setup.php';
require_once get_template_directory() . '/inc/enqueue-scripts.php';

if (function_exists('acf_register_block_type')) {
    require_once get_template_directory() . '/inc/acf-blocks.php';
}
