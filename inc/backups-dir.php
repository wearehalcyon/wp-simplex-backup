<?php
/**
 * Backups directory in wp-content
 */

if (!file_exists(WPSXB_PLUGIN_BACKUPS_DIR)) {
    mkdir(WPSXB_PLUGIN_BACKUPS_DIR, 0755, true);
}

$zip_files = glob(WPSXB_PLUGIN_BACKUPS_DIR . '*.zip');

if (!defined('WPSXB_BACKUP_FILES_EXISTS')) {
    if (!empty($zip_files)) {
        define('WPSXB_BACKUP_FILES_EXISTS', true);
    } else {
        define('WPSXB_BACKUP_FILES_EXISTS', false);
    }
}

if (!defined('WPSXB_BACKUP_FILES_LIST')) {
    if (!empty($zip_files)) {
        $detailed_files = [];
        foreach ($zip_files as $file_path) {
            $file_name = basename($file_path);

            if (preg_match('/^wpsxb_(files|database)_\d+\.zip$/', $file_name)) {
                $parts = explode('_', $file_name);

                // Extract backup type (files/database) and date
                $type = $parts[1];
                $timestamp = (int)explode('.', $parts[2])[0];

                // File size
                $file_size = filesize($file_path);
                if ($file_size < 1024) {
                    $size = $file_size . ' bytes';
                } elseif ($file_size < 1048576) {
                    $size = round($file_size / 1024, 2) . ' Kb';
                } elseif ($file_size < 1073741824) {
                    $size = round($file_size / 1048576, 2) . ' Mb';
                } else {
                    $size = round($file_size / 1073741824, 2) . ' Gb';
                }

                // Formatting date
                $date_created = date('F j, Y \a\t g:i A', $timestamp);

                // Create array
                $detailed_files[$file_name] = [
                    'type' => $type,
                    'type_name' => ucfirst($type),
                    'size' => $size,
                    'size_in_bytes' => $file_size,
                    'date_created' => $date_created,
                    'timestamp' => $timestamp, // Temporary point for sorting
                ];
            }
        }

        // Sort files
        uasort($detailed_files, function ($a, $b) {
            return $b['timestamp'] <=> $a['timestamp'];
        });

        // Remove temporary point
        foreach ($detailed_files as &$file) {
            unset($file['timestamp']);
        }

        define('WPSXB_BACKUP_FILES_LIST', $detailed_files);
    } else {
        define('WPSXB_BACKUP_FILES_LIST', true);
    }
}