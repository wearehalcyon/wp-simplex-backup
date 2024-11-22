<?php
/**
 * Include dashboard scripts and styles
 */

add_action('admin_enqueue_scripts', 'wpsxb_add_plugin_scripts_and_styles');
function wpsxb_add_plugin_scripts_and_styles(){
    if (isset($_GET['page']) && $_GET['page'] == 'wpsx-backup-and-migrations') {
        // Add styles
        $style_file = WPSXB_PLUGIN_PATH . 'assets/css/plugin.css';
        $style_file_url = WPSXB_PLUGIN_URL . 'assets/css/plugin.css';
        wp_enqueue_style('wpsxb-styles', $style_file_url, [], filemtime($style_file));

        // Add scripts
        $script_file = WPSXB_PLUGIN_PATH . 'assets/js/plugin.js';
        $script_bootstrap_file = WPSXB_PLUGIN_PATH . 'assets/js/bootstrap.min.js';
        $script_file_url = WPSXB_PLUGIN_URL . 'assets/js/plugin.js';
        $script_bootstrap_file_url = WPSXB_PLUGIN_URL . 'assets/js/bootstrap.min.js';
        wp_enqueue_script('wpsxb-scripts-bootstrap', $script_bootstrap_file_url, ['jquery'], filemtime($script_bootstrap_file), true);
        wp_enqueue_script('wpsxb-scripts', $script_file_url, ['jquery'], filemtime($script_file), true);

        // Inline scripts and styles
        add_action('admin_print_footer_scripts', 'wpsxb_inline_footer_scripts', 99);
        function wpsxb_inline_footer_scripts(){
            echo '
                <script id="wpsxb-inline-scripts">
                    jQuery(document).ready(function($){
                        $(".delete-backup").on("click", function(event){
                            event.preventDefault();
                            let type = $(this).data("type");
                            if (confirm("' . __('Are you sure want to delete this " + type + " Backup file?') . '") == true) {
                                $(this).html("<img src=\'' . WPSXB_PLUGIN_URL . 'assets/images/bars-rotate-fade-white-36.svg\' alt=\'Spinner\' width=\'16\' height=\'16\'>");
                                setTimeout(() => {
                                    window.location.href = $(this).attr("href");
                                }, 2000);
                            }
                        });
                    });
                </script>
            ';
        }
    }
}