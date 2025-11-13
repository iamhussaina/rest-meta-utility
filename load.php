<?php
/**
 * Main loader file for the REST Meta Utility.
 *
 * Include this file in your theme's functions.php to activate the utility.
 *
 * @package   HussainasRestMetaUtility
 * @version     1.0.0
 * @author      Hussain Ahmed Shrabon
 * @license     GPLv2 or later
 * @link        https://github.com/iamhussaina
 * @textdomain  hussainas
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Define a constant for the utility's path for reliable file includes.
if ( ! defined( 'HUSSAINAS_REST_UTILITY_PATH' ) ) {
	define( 'HUSSAINAS_REST_UTILITY_PATH', dirname( __FILE__ ) . '/' );
}

// Load the core REST API extension functions.
require_once HUSSAINAS_REST_UTILITY_PATH . 'includes/rest-api-extensions.php';
