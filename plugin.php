<?php
/**
 * Plugin name: WP SimpleX Backup & Migration
 * Version: 1.0.0
 * Author: INTAKE Digital
 * Author URI: https://intakedigital.net/
 * Description: This is simple and fast plugin for making backups for your web-site and also providing migration from one to second.
 * @license GPL-3.0 license
 * License: GPL-3.0
 * Network: true
 * Requires PHP: 8.1
 * Requires at least: 6.7.1
 * GitHub Plugin URI: https://github.com/wearehalcyon/wp-simplex-backup
 * Primary Branch: main
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

if (!defined('WPSXB_PLUGIN_PATH')) {
    define('WPSXB_PLUGIN_PATH', ABSPATH . 'wp-content/plugins/wp-simplex-backup/');
}
if (!defined('WPSXB_PLUGIN_URL')) {
    define('WPSXB_PLUGIN_URL', plugin_dir_url(__FILE__));
}
if (!defined('WPSXB_PLUGIN_VERSION')) {
    define('WPSXB_PLUGIN_VERSION', get_file_data(__FILE__, array('version' => 'Version'), false)['version']);
}
if (!defined('WPSXB_PLUGIN_AUTHOR_URL')) {
    define('WPSXB_PLUGIN_AUTHOR_URL', get_file_data(__FILE__, array('author_url' => 'Author URI'), false)['author_url']);
}
if (!defined('WPSXB_PLUGIN_AUTHOR_NAME')) {
    define('WPSXB_PLUGIN_AUTHOR_NAME', get_file_data(__FILE__, array('author_name' => 'Author'), false)['author_name']);
}
if (!defined('WPSXB_PAGE_SLUG')) {
    define('WPSXB_PAGE_SLUG', 'wpsx-backup-and-migrations');
}
if (!defined('WPSXB_PLUGIN_BACKUPS_DIR')) {
    define('WPSXB_PLUGIN_BACKUPS_DIR', WP_CONTENT_DIR . '/wpsxb-backups');
}

require_once WPSXB_PLUGIN_PATH . 'inc/assets.php';
require_once WPSXB_PLUGIN_PATH . 'inc/menu.php';
require_once WPSXB_PLUGIN_PATH . 'inc/backups-dir.php';
require_once WPSXB_PLUGIN_PATH . 'inc/action-backup.php';