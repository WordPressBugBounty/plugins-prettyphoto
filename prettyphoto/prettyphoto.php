<?php
/*
Plugin Name: PrettyPhoto - Simple Lightbox Plugin
Plugin URI: https://www.iBabar.com
Description: The WordPress port of the jQuery library named PrettyPhoto.
Version: 1.2.5
Author: Babar
Author URI: https://master-addons.com/
Tested Up to: 6.8
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

if (!defined('ABSPATH')) { exit; } // No, Direct access Sir !!!

$plugin_data = get_file_data(__FILE__,  array(
        'Version'       => 'Version',
        'Plugin Name'   => 'Plugin Name'
    ),false);
$plugin_name = $plugin_data['Plugin Name'];
$plugin_version = $plugin_data['Version'];


define('JLTMA_WPF', $plugin_name);
define('JLTMA_WPF_VERSION', $plugin_version);
define('JLTMA_WPF_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ));
define('JLTMA_WPF_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ));
define('JLTMA_WPF_TD', load_plugin_textdomain('jltma-wpf'));
define('JLTMA_WPF_ADDON', plugin_dir_path( __FILE__ ) . '/addon/' );
define('JLTMA_WPF_PRO_URL', 'https://master-addons.com/');


require_once dirname( __FILE__ ) . '/class-wordpress-prettyphoto.php';
