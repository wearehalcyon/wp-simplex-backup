<?php
/**
 * Menu items in dashboard
 */

add_action('admin_menu', 'wpsxb_add_custom_submenu_before_tools');
function wpsxb_add_custom_submenu_before_tools(){
    global $submenu;

    $parent_slug = 'tools.php';
    $submenu_title = 'Backup & Migrations';
    $page_title = 'WP SimpleX Backup & Migrations';
    $capability = 'manage_options';
    $menu_slug = WPSXB_PAGE_SLUG;
    $callback_function = 'wpsxb_custom_submenu_callback';

    add_submenu_page(
        $parent_slug,
        $page_title,
        $submenu_title,
        $capability,
        $menu_slug,
        $callback_function
    );
}

function wpsxb_custom_submenu_callback(){
    require_once WPSXB_PLUGIN_PATH . 'views/index.php';
}