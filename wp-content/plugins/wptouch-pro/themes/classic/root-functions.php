<?php

// Add Classic's custom user agents to the list of supported devices
add_filter( 'wptouch_supported_device_classes', 'classic_supported_devices' );

// When the root-functions.php is loaded, load all the Classic functions that should be global
add_filter( 'wptouch_functions_loaded', 'classic_functions_loaded' );

// When the mobile theme is showing, load all the other relevant template functions
add_filter( 'wptouch_mobile_theme_showing', 'classic_mobile_theme_showing' );

function classic_supported_devices( $devices ) {
	if ( isset( $devices['iphone'] ) ) {
		$settings = wptouch_get_settings();

		if ( strlen( $settings->classic_custom_user_agents  ) ) {	
			// get user agents
			$agents = explode( "\n", str_replace( "\r\n", "\n", $settings->classic_custom_user_agents ) );
			if ( count( $agents ) ) {	
				// add our custom user agents
				$devices['iphone'] = array_merge( $devices['iphone'], $agents );
			}
		}
	}
	
	return $devices;	
}

// Load the additional global Classic functions
function classic_functions_loaded() {
	require_once( dirname( __FILE__ ) . '/includes/global.php' );
}

// Load the Classic-specific templating functions
function classic_mobile_theme_showing() {
	require_once( dirname( __FILE__ ) . '/includes/theme.php' );
}
