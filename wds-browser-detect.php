<?php
/**
 * Plugin Name: WDS Browser Detect
 * Plugin URI: http://webdevstudios.com
 * Description: A lightweight plugin to detect browsers, operating systems, and devices.
 * Author: WebDevStudios
 * Author URI: https://github.com/WebDevStudios/WDS-Browser-Detect
 * Version: 1.1
 * License: GPLv2
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the browser detection engine
if ( ! class_exists( 'Browser' ) && file_exists( dirname( __FILE__ ) . '/lib/Browser.php' ) ) {
	require_once dirname( __FILE__ ) . '/lib/Browser.php';
}

/**
 * IE?
 *
 * Default usage:
 *
 * if ( wds_browser_is_ie() ) {
 *    <!-- some code here -->
 * }
 *
 * Detect version:
 *
 * if ( wds_browser_is_ie( '11' ) ) {
 *    <!-- some code here -->
 * }
 *
 * @param  string   $version  The browser version.
 * @return boolean
 */
function wds_browser_is_ie( $version = '' ) {

	$browser = new Browser();

	// If we're not passing the $version, detect the browser
	if ( empty( $version ) && $browser->getBrowser() == Browser::BROWSER_IE ) {
		return true;
	}

	// If we are passing the $version, detect the browser and version
	if ( intval( $version ) == $browser->getVersion() && $browser->getBrowser() == Browser::BROWSER_IE ) {
		return true;
	}

	return false;
}

/**
 * Microsoft Edge?
 *
 * Default usage:
 *
 * if ( wds_browser_is_edge() ) {
 *    <!-- some code here -->
 * }
 *
 * Detect version:
 *
 * if ( wds_browser_is_edge( '12' ) ) {
 *    <!-- some code here -->
 * }
 *
 * Note: The version number detection has been rounded down to the nearest whole number.
 * e.g.; 12.12525 = 12.
 *
 * @param  string   $version  The browser version.
 * @return boolean
 */
function wds_browser_is_edge( $version = '' ) {

	$browser = new Browser();

	// If we're not passing the $version, detect the browser
	if ( empty( $version ) && $browser->getBrowser() == Browser::BROWSER_EDGE ) {
		return true;
	}

	// If we are passing the $version, detect the browser and version
	if ( intval( $version ) == $browser->getVersion() && $browser->getBrowser() == Browser::BROWSER_EDGE ) {
		return true;
	}

	return false;
}

/**
 * Chrome?
 *
 * Default usage:
 *
 * if ( wds_browser_is_chrome() ) {
 *    <!-- some code here -->
 * }
 *
 * Detect version:
 *
 * if ( wds_browser_is_chrome( '43' ) ) {
 *    <!-- some code here -->
 * }
 *
 * @param  string   $version  The browser version.
 * @return boolean
 */
function wds_browser_is_chrome( $version = '' ) {

	$browser = new Browser();

	// If we're not passing the $version, detect the browser
	if ( empty( $version ) && $browser->getBrowser() == Browser::BROWSER_CHROME ) {
		return true;
	}

	// If we are passing the $version, detect the browser and version
	if ( intval( $version ) == $browser->getVersion() && $browser->getBrowser() == Browser::BROWSER_CHROME ) {
		return true;
	}

	return false;
}

/**
 * Safari?
 *
 * Default usage:
 *
 * if ( wds_browser_is_safari() ) {
 *    <!-- some code here -->
 * }
 *
 * Detect version:
 *
 * if ( wds_browser_is_safari( '8' ) ) {
 *    <!-- some code here -->
 * }
 *
 * @param  string   $version  The browser version.
 * @return boolean
 */
function wds_browser_is_safari( $version = '' ) {

	$browser = new Browser();

	// If we're not passing the $version, detect the browser
	if ( empty( $version ) && $browser->getBrowser() == Browser::BROWSER_SAFARI ) {
		return true;
	}

	// If we are passing the $version, detect the browser and version
	if ( intval( $version ) == $browser->getVersion() && $browser->getBrowser() == Browser::BROWSER_SAFARI ) {
		return true;
	}

	return false;
}

/**
 * Firefox?
 *
 * Default usage:
 *
 * if ( wds_browser_is_firefox() ) {
 *    <!-- some code here -->
 * }
 *
 * Detect version:
 *
 * if ( wds_browser_is_firefox( '38' ) ) {
 *    <!-- some code here -->
 * }
 *
 * @param  string   $version  The browser version.
 * @return boolean
 */
function wds_browser_is_firefox( $version = '' ) {

	$browser = new Browser();

	// If we're not passing the $version, detect the browser
	if ( empty( $version ) && $browser->getBrowser() == Browser::BROWSER_FIREFOX ) {
		return true;
	}

	// If we are passing the $version, detect the browser and version
	if ( intval( $version ) == $browser->getVersion() && $browser->getBrowser() == Browser::BROWSER_FIREFOX ) {
		return true;
	}

	return false;
}

/**
 * Mobile phones.
 */
function wds_browser_is_mobile() {

	$browser = new Browser();

	if ( true == $browser->isMobile() ) {
		return true;
	}

	return false;
}

/**
 * Tablets.
 */
function wds_browser_is_tablet() {

	$browser = new Browser();

	if ( true == $browser->isTablet() ) {
		return true;
	}

	return false;
}

/**
 * Mobile phone and/or tablet.
 */
function wds_browser_is_handheld() {

	$browser = new Browser();

	if ( true == $browser->isMobile() || true == $browser->isTablet() ) {
		return true;
	}

	return false;
}

/**
 * Bots.
 */
function wds_browser_is_robot() {

	$browser = new Browser();

	if ( true == $browser->isRobot() ) {
		return true;
	}

	return false;
}

/**
 * Facebook app.
 */
function wds_browser_is_facebook() {

	$browser = new Browser();

	if ( true == $browser->isFacebook() ) {
		return true;
	}

	return false;
}

/**
 * AOL.
 */
function wds_browser_is_aol() {

	$browser = new Browser();

	if ( true == $browser->isAol() ) {
		return true;
	}

	return false;
}


/**
 * Windows OS.
 */
function wds_browser_is_windows() {

	$browser = new Browser();

	if ( 'Windows' === $browser->getPlatform() ) {
		return true;
	}

	return false;
}

/**
 * OSX.
 */
function wds_browser_is_osx() {

	$browser = new Browser();

	if ( 'Apple' === $browser->getPlatform() ) {
		return true;
	}

	return false;
}

/**
 * Linux.
 */
function wds_browser_is_linux() {

	$browser = new Browser();

	if ( 'Linux' === $browser->getPlatform() ) {
		return true;
	}

	return false;
}

/**
 * iOS.
 */
function wds_browser_is_ios() {

	$browser = new Browser();

	if ( 'iPhone' === $browser->getPlatform() || 'iPad' === $browser->getPlatform() || 'iPod' === $browser->getPlatform() ) {
		return true;
	}

	return false;
}

/**
 * Android
 */
function wds_browser_is_android() {

	$browser = new Browser();

	if ( 'Android' === $browser->getPlatform() ) {
		return true;
	}

	return false;
}