<?php
/**
 * Plugin Name:       Codrops
 * Plugin URI:        http://www.champ.ninja/codrops/
 * Description:       A compilation of CoDrops tutorials integrated with WordPress
 * Version:           1.0.0
 * Author:            Champ Camba
 * Author URI:        http://www.champ.ninja/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-codrops
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Skelet Config Path
 */

$skelet_paths[] = array(
    'prefix'      => 'wp_codrops',
    'dir'         => wp_normalize_path(  plugin_dir_path( __FILE__ ).'/admin/' ),
    'uri'         => plugin_dir_url( __FILE__ ).'/admin/skelet',
);


/**
 * Load Skelet Framework
 */
if( ! class_exists( 'Skelet_LoadConfig' ) ){
        include_once dirname( __FILE__ ) .'/admin/skelet/skelet.php';
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-codrops-activator.php
 */
function activate_wp_codrops() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-codrops-activator.php';
	Wp_Codrops_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-codrops-deactivator.php
 */
function deactivate_wp_codrops() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-codrops-deactivator.php';
	Wp_Codrops_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_codrops' );
register_deactivation_hook( __FILE__, 'deactivate_wp_codrops' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-codrops.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_codrops() {

	$plugin = new Wp_Codrops();
	$plugin->run();

}
run_wp_codrops();
