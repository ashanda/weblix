<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'weblixco_wp326' );
/** Database username */
define( 'DB_USER', 'weblixco_wp326' );
/** Database password */
define( 'DB_PASSWORD', '085)3S)J2p' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tn8k3einvhcqve1j8s6xqpjbloeta5kdsivuh6tcbcz2t7zeydqjyninjrdgw9ep' );
define( 'SECURE_AUTH_KEY',  '5jdvgycmcb6yf8vza83vgjcimde5lail5mct1k9dvfmj5dd4ih6czykxwgzseqmb' );
define( 'LOGGED_IN_KEY',    'hzvpxhzkfjsviy6sidynbyshlajz64t5kngi8ohz0tpxrtvashhsa5klkfzcfjad' );
define( 'NONCE_KEY',        'gikrlgreogqvdincifu6disowgyjn2kmlbdzzqpr3feta06qbtwdmqrw2xzugp6x' );
define( 'AUTH_SALT',        'ido9es1gni6zq4idkmtdl6om01ryfhz5dmrf3kdua0y1xxrvfspt6ejbd74zxbob' );
define( 'SECURE_AUTH_SALT', '5qtgqufsqdvfqatsuzmcdbekfhyotfsl5r666bf5gtrlsaiml76budz5hfaw8gaz' );
define( 'LOGGED_IN_SALT',   'dxpeaizfwjhxklihhz8jyy2jpknuikinfpbylnoefpiwq4yzdqwwizff2h4ojq4m' );
define( 'NONCE_SALT',       'm74ogsqyooaw7dorznurud57r3afgdxnstz38acylgrnno9sozifv4175gdslhf7' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lix_';
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
