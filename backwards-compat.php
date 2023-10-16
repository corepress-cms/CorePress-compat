<?php
/*
 * Plugin Name:       Backwards compatibility
 * Plugin URI:        https://corepress.org/compatibility/
 * Description:       Backwards-compatibility hooks to stay compatible with WordPress
 * Version:           0.0.1
 * Requires at least: 6.3
 * Requires PHP:      7.2
 * Author:            CorePress Team
 * Author URI:        https://corepress.org/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://corepress.org/compatibility/
 * Network:           true
 */

function backwards_compat_activate() {
    if ( ! file_exists( WP_CONTENT_DIR . '/backwards-compat.php' ) ) {
        copy( __DIR__ . '/backwards-compat-drop-in.php.disabled', WP_CONTENT_DIR . '/backwards-compat.php' );
    } else {
        wp_die( 'Backwards-compat is already activated.' );
    }
}
register_activation_hook( __FILE__, 'backwards_compat_activate' );

function backwards_compat_deactivate() {
    if ( file_exists( WP_CONTENT_DIR . '/backwards-compat.php' ) ) {
        unlink( WP_CONTENT_DIR . '/backwards-compat.php' );
    }
}
register_deactivation_hook( __FILE__, 'backwards_compat_deactivate' );
