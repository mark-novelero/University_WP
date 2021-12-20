<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'I8YUrt8HtRx0nWKTwQDg6mUhEqoEP7bBdhRcLd7M4rqqT6sM1mWjFkh01/v1w5m75C1tWalro34e3GdPgiv64Q==');
define('SECURE_AUTH_KEY',  'GlSkqk5ywZKYXNmoD3a8nUjMzqUSqFlk/F7jjZ+kpCqdj07R686Xp2ZW8bgV+2E/sId7V6OiduPM8WWhVZlawA==');
define('LOGGED_IN_KEY',    'HcDhTzyDLxoG3zPxbCMCQOeG7tklFWb8NIiUEawBHGeNDiIfqKHT+4CcfUu7UHmCE2bkUAXDNtVsptuejvxfuA==');
define('NONCE_KEY',        'zqpL9eJPKgTZ+ieCNtpxR97nIiFRAzhE6oOTU4S8NuHU8fZ2pg0SO7P03Rs1MRb7fKqFqCYxCTFn9UDRExpU6A==');
define('AUTH_SALT',        'f3ft/So9tvWJ+eD/IBgpWvDAYRq8O2QJ70BRCLXvE69e6Tfi50SuOMb8zeqQxp8qp6Or9NKC4bfVPSZa2X23cQ==');
define('SECURE_AUTH_SALT', 'j3A7SaWqfrN5FsbBK1bE/UwkgGNBtRdhgsGcSfySjfMLM8e76y8tie+UW9b+ZbpbBP1Xu+hvloWx+7S+Vzfdog==');
define('LOGGED_IN_SALT',   't3xkV4gRQ/710n+WIPFMR8oOfrKSBIzBtvfPWL8q5mE3gAF/d+5Q1fIchWKIsRhJIY9V9f6DsOWlB+9nw+Wwyw==');
define('NONCE_SALT',       'A+oqQEG4EeWhj52ZIoZilUxeOhHXhRWrAPIJNsZwk9cp9G2TucVl3RwoWNetQdsDih8ICEtfxlPbLsBQWPGLvw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
