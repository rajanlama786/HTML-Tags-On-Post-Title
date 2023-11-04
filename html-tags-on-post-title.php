<?php

/**
 * The plugin to enable html tags in post title.
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://prosysthemes.com
 * @since             1.0.0
 * @package           Html_Tags_On_Post_Title
 *
 * @wordpress-plugin
 * Plugin Name:       HTML Tags On Post Title
 * Plugin URI:        https://prosysthemes.com/wordpress-plugins/html-tags-on-post-title
 * Description:       This Plugin helps post author to enable and display HTML tags in the title of the gutenberg editor and preserve the tags in the post Title.  
 * Version:           1.0.0
 * Author:            Rajan Lama
 * Author URI:        https://prosysthemes.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       html-tags-on-post-title
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'HTML_TAGS_ON_POST_TITLE_VERSION', '1.0.0' );

/**
 * Enqueue a script in the WordPress admin on edit.php.
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function htopt_enqueue_admin_script( $hook ) {
    wp_enqueue_script( 'html-tags-on-post-title', plugin_dir_url( __FILE__ ) . 'js/htopt-admin.js', array(), HTML_TAGS_ON_POST_TITLE_VERSION );
}
add_action( 'admin_enqueue_scripts', 'htopt_enqueue_admin_script' );