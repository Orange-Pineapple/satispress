<?php

add_filter('auto_update_plugin', '__return_true');
add_filter('auto_update_theme', '__return_true');

add_filter('template_redirect', function () {
    if (
        (defined('DOING_AJAX') && DOING_AJAX) ||
        (defined('DOING_CRON') && DOING_CRON) ||
        (defined('WP_CLI') && WP_CLI) ||
        is_user_logged_in()
    ) {
        return;
    }

    if (wp_safe_redirect(wp_login_url(), 302)) {
        exit;
    }
});
