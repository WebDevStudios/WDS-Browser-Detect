##WDS Browser Detect
A lightweight plugin to detect browsers, operating systems, and devices.

Powered by a (slightly) modified version of Chris Schuld's [https://github.com/cbschuld/Browser.php](https://github.com/cbschuld/Browser.php)

## Installation
* Download, unzip, and place into you WordPress `/plugins/` directory.
* Activate via the WordPress plugin manager.

## Caveats
This PHP script uses server-side User Agent sniffing - which isn't always reliable. If you're trying to detect browser capabilities, use [http://modernizr.com/](Modernizer) instead.

Also, If you're running any kind of page caching, this plugin will not work correctly. The first person to hit your site might be on a mobile device, and then cache will be generated (based on a mobile device). The next visitor my be using a desktop browser - and see something very different!

## Changelog

* 1.1 - Add support for Microsoft Edge & Windows 10
* 1.0 - Initial release

## Available Functions

Browsers

```php
wds_browser_is_ie()
```

```php
wds_browser_is_edge()
```

```php
wds_browser_is_chrome()
```

```php
wds_browser_is_safari()
```

```php
wds_browser_is_firefox()
```

```php
wds_browser_is_facebook()
```

```php
wds_browser_is_aol()
```

Devices

```php
wds_browser_is_mobile()
```

```php
wds_browser_is_tablet()
```

```php
wds_browser_is_handheld()
```

```php
wds_browser_is_robot()
```

Operating Systems

```php
wds_browser_is_windows()
```

```php
wds_browser_is_osx()
```

```php
wds_browser_is_linux()
```

```php
wds_browser_is_ios()
```

```php
wds_browser_is_anroid()
```

## Example Usage

These helper functions are intended to be used in conditionals and returns a BOOLEAN either `TRUE` or `FALSE`. Basic usage looks like:

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
