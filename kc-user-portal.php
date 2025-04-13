<?php
/**
 * Plugin Name: KEBCO User Portal
 * Plugin URI: https://github.com/kebcuevasph/kc-user-portal
 * Description: Centralized dashboard for logged-in users, redirecting non-admins to a user portal page.
 * Version: 1.0.0
 * Author: Keb Cuevas
 * Author URI: https://kebcuevas.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: kc-user-portal
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access to the plugin file
}

// === Define constants ===
define('KC_USER_PORTAL_VERSION', '1.0.0');
define('KC_USER_PORTAL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('KC_USER_PORTAL_PLUGIN_URL', plugin_dir_url(__FILE__));
define('KC_USER_PORTAL_TEXT_DOMAIN', 'kc-user-portal');

// === Include core functionality if available ===
$functions_file = KC_USER_PORTAL_PLUGIN_DIR . 'includes/functions.php';
if (file_exists($functions_file)) {
    require_once $functions_file;
}

// === Load textdomain ===
function kc_user_portal_load_textdomain() {
    load_plugin_textdomain(KC_USER_PORTAL_TEXT_DOMAIN, false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'kc_user_portal_load_textdomain');