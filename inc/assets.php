<?php
/**
 * Include dashboard scripts and styles
 */

add_action('admin_enqueue_scripts', 'wpsxb_add_plugin_scripts_and_styles');
function wpsxb_add_plugin_scripts_and_styles(){
    // Add styles
    $style_file = WPSXB_PLUGIN_PATH . 'assets/css/plugin.css';
    $style_file_url = plugin_dir_url(__FILE__) . '../assets/css/plugin.css';
    wp_enqueue_style('wpsxb-styles', $style_file_url, [], filemtime($style_file));

    // Add scripts
    $script_file = WPSXB_PLUGIN_PATH . 'assets/js/plugin.js';
    $script_file_url = plugin_dir_url(__FILE__) . '../assets/js/plugin.js';
    wp_enqueue_script('wpsxb-scripts', $script_file_url, ['jquery'], filemtime($script_file), true);
}