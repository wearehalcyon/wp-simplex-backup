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

require_once WPSXB_PLUGIN_PATH . 'inc/assets.php';