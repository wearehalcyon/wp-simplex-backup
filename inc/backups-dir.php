<?php
/**
 * Backups directory in wp-content
 */

$backup_folder = WP_CONTENT_DIR . '/wpsxb-backups';

if (!file_exists($backup_folder)) {
    mkdir($backup_folder, 0755, true);
}