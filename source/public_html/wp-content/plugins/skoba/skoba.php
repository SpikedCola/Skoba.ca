<?php
/*
Plugin Name: Skoba
Description: Main plugin for skoba.ca
Version: 0.0.1
Author: J Skoba
Author URI: http://www.skoba.ca
*/

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('google-analytics', plugins_url('/js/ga.js' , __FILE__));
});