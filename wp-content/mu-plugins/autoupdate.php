<?php
/**
 * Plugin Name:  Autoupdate the Planet!
 * Plugin URI:   https://orangepineapple.com
 * Description:  Autoupdate core, plugins and themes
 * Version:      1.0.0
 * Author:       Joshua Fredrickson
 * Author URI:   https://joshuafredrickson.com/
 * License:      MIT License
 */

namespace OP\Autoupdate;

add_filter('auto_update_core', '__return_true');
add_filter('auto_update_plugin', '__return_true');
add_filter('auto_update_theme', '__return_true');
