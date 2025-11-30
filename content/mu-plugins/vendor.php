<?php
/**
 * Plugin Name: Yak Vendor MU-plugin Loader
 * Description: Loads a selection of known good plugins.
 * Author: Sander van Dragt <sander@vandragt.com>
 * Version: 1.1.0
 * License: GPL-3.0-or-later
 */

// Don't interfere with the installation.
if ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) {
	return;
}

// Load known good plugins.
$plugins['local'] = [
	'debug-bar-elasticpress',
	'query-monitor',
	'user-switching',
];
$plugins['all']   = [
	'elasticpress',
	'redis-cache',
];

foreach ( $plugins as $environment => $env_plugins ) {
	if ( $environment !== 'all' && $environment !== wp_get_environment_type() ) {
		// Plugin environment doesn't match current.
		continue;
	}
	foreach ( $env_plugins as $plugin ) {
		$fn = WPMU_PLUGIN_DIR . "/vendor/$plugin/$plugin.php";
		if ( file_exists( $fn ) ) {
			require_once $fn;
		}
	}
}
