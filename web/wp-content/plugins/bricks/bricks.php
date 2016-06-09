<?php
/**
 * Plugin Name: Bricks
 * Description: Building a theme with pre-defined bricks using WordPress Fields API
 * Version: 1.0
 * Author: Studio Goliath
 * Author URI: http://www.studio-goliath.com/
 */

/**
 * Includes all the post-types
 */
foreach(glob( plugin_dir_path( __FILE__ ) . '/post-types/*.php' ) as $filename) {
    require_once $filename;
}