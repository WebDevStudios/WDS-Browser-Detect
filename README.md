##WDS Browser Detect
A lightweight plugin to detect browsers, operating systems, and devices.

Powered by a (slightly) modified version of Chris Schuld's [https://github.com/cbschuld/Browser.php](https://github.com/cbschuld/Browser.php)

## Installation
* Download, unzip, and place into you WordPress `/plugins/` directory.
* Activate via the WordPress plugin manager.

## Example Usage

These helper functions are intended to be used in conditionals and return either `TRUE` or `FALSE`. Basic usage looks like:

```php
if ( wds_browser_is_ie() ) {
	echo 'The browser is IE';
}
```
You can even detect browser versions for Chrome, Safari, Firefox, and IE:

```php
if ( wds_browser_is_ie( '9' ) ) {
	echo 'The browser is IE 9';
}
```
How about detecting if the browser is mobile?

```php
if ( wds_browser_is_mobile() ) {
	echo 'The browser is mobile';
}
```
...Or a tablet?

```php
if ( wds_browser_is_tablet() ) {
	echo 'The browser is a tablet';
}
```
...Why not both?

```php
if ( wds_browser_is_handheld() ) {
	echo 'The browser is a handheld device';
}
```

**A real world usage example:**

```php
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wds_client_body_classes( $classes ) {

	if ( wds_browser_is_ie() ) {
		$classes[] = 'ie';
	}

	if ( wds_browser_is_ie( '9' ) ) {
		$classes[] = 'ie9';
	}	

	if ( wds_browser_is_mobile() ) {
		$classes[] = 'phone';
	}

	if ( wds_browser_is_tablet() ) {
		$classes[] = 'tablet';
	}	

	return $classes;
}
add_filter( 'body_class', 'wds_client_body_classes' );
```
For more examples, checkout the [source code](https://github.com/WebDevStudios/WDS-Browser-Detect/blob/master/wds-browser-detect.php)!
