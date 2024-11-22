<?php
/**
 * Backup actions code
 */

 add_action('admin_init', function () {
    if (isset($_GET['action']) && $_GET['action'] == 'delete') {
        if (isset($_GET['file'])) {
            unlink(WPSXB_PLUGIN_BACKUPS_DIR . $_GET['file']);
        }

        wp_redirect(admin_url('/tools.php?page=' . WPSXB_PAGE_SLUG . '&status=success'), 301);
        exit;
    }
});