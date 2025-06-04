<?php
defined( 'WP_HOME' ) || define( 'WP_HOME', 'https://' . $_SERVER['HTTP_HOST'] );

// Define path & url for plugins and themes.
if ( ! defined( 'WP_CONTENT_DIR' ) ) {
	define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
}
if ( ! defined( 'WP_CONTENT_URL' ) ) {
	define( 'WP_CONTENT_URL', WP_HOME . '/content' );
}

if ( getenv( 'IS_DDEV_PROJECT' ) === 'true' ) {
	// Redis on ddev.
	if ( ! defined( 'WP_REDIS_HOST' ) ) {
		define( 'WP_REDIS_HOST', 'redis' );
	}

	// ElasticPress on ddev.
	if ( ! defined( 'EP_HOST' ) ) {
		define( 'EP_HOST', 'http://elasticsearch:9200' );
	}
}

if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
	define( 'WP_DEBUG_DISPLAY', false );
}

// Enable page caching
define( 'WP_CACHE', true );
